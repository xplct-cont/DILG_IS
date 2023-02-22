<?php

namespace App\Http\Controllers\Admin_View;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Permission;

class Admin_UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $users = User::all();

        return view('Admin_View.users.index', compact('users'));
    }

    public function store(Request $request){

        $users = new User;

        $users->name = $request->input('name');
        $users->position = $request->input('position');
        $users->email = $request->input('email');
        $users->email_verified_at = now();
        $users->password = $request->input('password');

        if($request->hasFile('profile_img')){

            $file = $request->file('profile_img');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'. $extention;
            Image::make($file)->save(public_path('/user_profile_images/' . $filename));
            $users->profile_img = $filename;

          }

        $users->save();

        return redirect()->back()->with('message', 'Added to User Successfully!');

    }

    public function show(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }

    public function assignRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return back()->with('message', 'Role exists.');
        }

        $user->assignRole($request->role);
        return back()->with('message', 'Role assigned.');
    }

    public function removeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('message', 'Role removed.');
        }

        return back()->with('message', 'Role not exists.');
    }



    public function destroy(User $user)
    {
        if ($user->hasRole('admin')) {
            return back()->with('message', 'you are admin.');
        }
        $user->delete();

        return back()->with('message', 'User deleted.');
    }
}
