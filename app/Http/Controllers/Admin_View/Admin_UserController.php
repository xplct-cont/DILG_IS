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
        $users = User::get();
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
            Image::make($file)->save(public_path('/user_profile_images/' . $filename));
            $users->profile_img = $filename;

          }

        $users->save();

        return redirect()->back()->with('message', 'Added to User Successfully!');

    }

    public function update_user(Request $request, $id){
        $users = User::find($id);

        $users->name = $request->input('name');
        $users->position = $request->input('position');
        $users->email = $request->input('email');
        $users->email_verified_at = now();
        $users->password = $request->input('password');
        //$users->removeRole($request->role);
        $users->assignRole($request->role);
        // if ($users->hasRole($request->role)) {
        //     $users->removeRole($request->role);
        //     $users->assignRole($request->role);
        // }


        if($request->hasFile('profile_image')){

            $destination = 'user_profile_images/'.$users->profile_img;
            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            $file->move('user_profile_images/', $filename);
            $users->profile_img = $filename;

        }

    $users->update();
    return redirect()->back()->with('message', 'Updated Successfully!');

    }

    public function delete_user(Request $request, $id)
    {

        // $ids = $request->ids;
        // user::whereIn('id', $ids)->delete();

            $users = User::find($id);
            $destination = public_path('user_profile_images/'.$users->profile_image);
             if(File::exists($destination)){
                 File::delete($destination);
             }
            $users->delete();

        return redirect()->back()->with('message', 'Deleted Successfully!');
    }

    public function show(Request $request, $id)
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('Admin_View.users.index', compact('user', 'roles', 'permissions'));
    }

    // public function assignRole(Request $request, $id)
    // {
    //     if ($user->hasRole($request->role)) {
    //         return back()->with('message', 'Role exists.');
    //     }

    //     $user->assignRole($request->role);
    //     return back()->with('message', 'Role assigned.');
    // }

    // public function removeRole($id, Role $role)
    // {
    //     if ($user->hasRole($role)) {
    //         $user->removeRole($role);
    //         return back()->with('message', 'Role removed.');
    //     }

    //     return back()->with('message', 'Role not exists.');
    // }



    public function destroy(User $user)
    {
        if ($user->hasRole('admin')) {
            return back()->with('message', 'you are admin.');
        }
        $user->delete();

        return back()->with('message', 'User deleted.');
    }
}
