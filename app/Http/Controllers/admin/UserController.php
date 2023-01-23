<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users=User::select(['id','name','email','is_super_admin'])->orderBy('is_super_admin','desc')->latest()->get();
        return view('admin.user.index',compact('users'));
    }


    public function create()
    {
        return view('admin.user.create',[
            "roles"=>Role::where('title','!=','Super Admin')->pluck('title','id'),
        ]);
    }

    public function store(Request $request)
    {
        $role=Role::find($request->role_id);

        $request->validate([
            "name"=>"required|max:120",
            "email"=>"required|unique:users",
            "password"=>"required|min:8",
            "confirm_password"=>"same:password",
        ]);
        $user=new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->save();
        $user->role()->attach($role->id);
        foreach($role->permission as $permission){
                $user->permission()->attach($permission->id);
        }

        return redirect()->route('admin.user.index')->withMessage('Successfully created');

    }


    public function edit(User $user)
    {
        $roles=Role::where('title','!=','Super Admin')->pluck('title','id');
        return view('admin.user.edit',compact('user','roles'));
    }


    public function update(Request $request, User $user)
    {
        $role=Role::findorFail($request->role_id);

        $request->validate([
            "name"=>"required|max:120",
            "email"=>"required|unique:users,email,".$user->id,

        ]);

        $user->name=$request->name;
        $user->email=$request->email;
        $user->save();
        $user->role()->sync($role->id);
        foreach($role->permission as $permission){
                $user->permission()->sync($permission->id);
        }

        return redirect()->route('admin.user.index')->withMessage('Successfully created');
    }


    public function destroy(User $user)
    {
        //
    }
}