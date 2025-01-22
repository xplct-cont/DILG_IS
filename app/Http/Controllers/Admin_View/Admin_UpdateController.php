<?php

namespace App\Http\Controllers\Admin_View;

use Facebook\Facebook;
use App\Http\Controllers\Controller;
use App\Models\Update;
use App\Models\Updates_Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Admin_UpdateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $updates_images = Updates_Image::all();
        $news_images = Update::when($request->status != null, function ($q) use ($request) {
                return $q->where('status', $request->status);
            })
            ->when($request->search != null, function ($q) use ($request) {
                return $q->where('title', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('caption', 'LIKE', '%' . $request->search . '%');
            })
            ->orderBy("created_at", "DESC")
            ->paginate(20);

        return view('Admin_View.updates.index', compact('news_images', 'updates_images'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function store(Request $request)
{
    $img = new Update;

    $img->title = $request->input('title');
    $img->caption = $request->input('caption');
    $img->user_id = auth()->user()->id;

    $this->validate($request, [
        'images*' => 'image|mimes:jpeg,png,jpg,gif,svg'
    ]);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $name = $image->getClientOriginalName();
            $image->move('/home/dilgboho/public_html/news_updates/', $name);
            $data[] = $name;
        }
        $img->images = json_encode($data);
    }

    $img->save();

    // Check if "Share to Facebook" checkbox was selected
    if ($request->has('share_to_facebook')) {
        $this->shareToFacebook($request->input('title'), $request->input('caption'));
    }

    return redirect()->back()->with('message', 'Added Successfully : Waiting for Approval!');
}

    protected function shareToFacebook($title, $caption)
    {
        $fb = new Facebook([
            'app_id' => config('services.facebook.app_id'),
            'app_secret' => config('services.facebook.app_secret'),
            'default_graph_version' => 'v12.0',
        ]);

        try {
            // Get the access token from config or directly here
            $accessToken = config('services.facebook.access_token');

            // Prepare the message
            $message = $title . "\n\n" . $caption . "\n\n" . 'Check out our website: https://dilgbohol.com/news_update';

            // Ensure the access token is not empty
            if (empty($accessToken)) {
                throw new \Exception('Access token is missing or invalid.');
            }

            // Send the post request with message and access token
            $fb->post('/me/feed', [
                'message' => $message
            ], $accessToken);

            // Optionally, redirect with a success message
            return redirect()->back()->with('success', 'News successfully posted to Facebook!');
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            return redirect()->back()->with('error', 'Graph returned an error: ' . $e->getMessage());
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            return redirect()->back()->with('error', 'Facebook SDK returned an error: ' . $e->getMessage());
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function edit_updates(Request $request, $id)
    {
        $img = Update::find($id);

        $img->title = $request->input('title');
        $img->caption = $request->input('caption');
        $img->user_id = auth()->user()->id;

        $this->validate($request, [
            'edit_images.*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        // Process edited images
        if ($request->hasFile('edit_images')) {
            $editedImages = json_decode($img->images, true) ?: [];

            foreach ($request->file('edit_images') as $index => $editImage) {
                $oldImage = $request->input('old_images.' . $index);

                // Delete old image if needed, or move to an archive folder
                if ($oldImage && Storage::exists('/news_updates/' . $oldImage)) {
                    Storage::delete('/news_updates/' . $oldImage);
                }

                $name = $editImage->getClientOriginalName();
                $editImage->move('/home/dilgboho/public_html/news_updates/', $name);

                // Replace only the selected image(s), keeping others unchanged
                $editedImages[$index] = $name;
            }

            // Update the edited images, replacing only the selected image(s)
            $img->images = json_encode($editedImages);
        }

        $img->update();

        return redirect()->back()->with('message', 'Updated Successfully!');
    }

    public function delete_updates(Request $request, $id)
    {
        $img = Update::find($id);
        $images = json_decode($img->images, true);

        if (is_array($images) && !empty($images)) {
            foreach ($images as $deleteimage) {
                if (Storage::exists('/news_updates/' . $deleteimage)) {
                    Storage::delete('/news_updates/' . $deleteimage);
                }
            }
            $img->delete();
        }

        return redirect()->back()->with('message', 'Deleted Successfully!');
    }

    public function storeImage(Request $request, $id)
    {
        $img = Updates_Image::find($id);

        $this->validate($request, [
            'images*' => 'image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        $images = json_decode($img->images, true);

        if (is_array($images) && !empty($images)) {
            foreach ($images as $deleteimage) {
                if (Storage::exists('/updates_images/' . $deleteimage)) {
                    Storage::delete('/updates_images/' . $deleteimage);
                }
            }
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $name = $image->getClientOriginalName();
                $image->move('/home/dilgboho/public_html/updates_images/', $name);
                $data[] = $name;
            }
        }

        // Update the edited images, replacing only the selected image(s)
        $img->images = json_encode($data);
        $img->save();

        return redirect()->back()->with('message', 'Added Images Successfully!');
    }

    public function approve($id)
    {
        $news_updates = Update::find($id);
        $news_updates->status = true;
        $news_updates->save();

        return redirect()->back()->with('message', 'Approved Successfully!');
    }

    public function disapprove($id)
    {
        $news_updates = Update::find($id);
        $news_updates->status = false;
        $news_updates->save();

        return redirect()->back()->with('message', 'Disapproved Successfully!');
    }
}
