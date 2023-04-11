<?php

namespace App\Http\Controllers\Admin_View;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Spatie\Permission\Models\Permission;

class Admin_UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $users = User::where('id', '!=', 1)->get();
        $roles = Role::all();

        return view('Admin_View.users.index', compact('users', 'roles'));
    }

    public function store(Request $request){

        $users = new User;

        $users->name = $request->input('name');
        $users->position = $request->input('position');
        $users->email = $request->input('email');
        $users->email_verified_at = now();
        $users->password = $request->input('password');
        $users->assignRole($request->role);

        if($request->hasFile('profile_image')){

            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            Image::make($file)->save('/home/dilgboho/public_html/user_profile_images/'. $filename);
            $users->profile_img = $filename;

          }

        $users->save();

        return redirect()->back()->with('message', 'Added New User Successfully!');

    }

    public function update_user(Request $request, $id){
        $users = User::find($id);

        $users->name = $request->input('name');
        $users->position = $request->input('position');
        $users->email = $request->input('email');
        $users->email_verified_at = now();
        $users->roles()->sync([$request->input('role')]);

        if ($users->hasRole($request->role)) {
            $users->removeRole($request->role);
        }

        $newPassword = $request->get('password');
        if($request->hasFile('profile_image')){

            $destination = '/home/dilgboho/public_html/user_profile_images/'.$users->profile_img;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('/home/dilgboho/public_html/user_profile_images/', $filename);
            $users->profile_img = $filename;

        }

    //$users->update();
    if(empty($newPassword)){
        $users->update($request->except('password'));
    }else{
        $users->update($request->all());
    }
    return redirect()->back()->with('message', 'User Updated Successfully!');

    }

    public function delete_user(Request $request, $id)
    {
        $users = User::find($id);
        $destination = '/home/dilgboho/public_html/user_profile_images/'.$users->profile_image;
            if(File::exists($destination)){
                File::delete($destination);
            }
        $users->delete();

        return redirect()->back()->with('message', 'User Deleted Successfully!');
    }

}
