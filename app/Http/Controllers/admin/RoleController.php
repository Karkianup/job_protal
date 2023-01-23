<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\{Role,Permission};
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
         $roles=Role::select(['id','title','is_super_admin'])->get();
         return view('admin.role.index',compact('roles'));
    }
 
    public function create()
    {
     return view('admin.role.create',[
         "permissions"=>Permission::select(['id','title'])->get()
     ]);
    }
    public function store(Request $request)
    {
     $request->validate([
         "title"=>"max:120|required",
     ]);
        $role=new Role;
        $role->title=$request->title;
        $role->save();
        $role->permission()->attach($request->permission_id);
        return redirect()->route('admin.role.index')->withMessage('Successfully created');
    }
 
    public function edit(Role $role)
    {
     $permissions=Permission::select(['id','title'])->get();
         return view('admin.role.edit',compact('role','permissions'));
    }
    public function update(Role $role,Request $request)
    {
         $role->title=$request->title;
         $role->update();
         $role->permission()->sync($request->permission_id);
        return redirect()->route('admin.role.index')->withMessage('Successfully updated');
 
    }
 
    public function destroy(Role $role)
    {
         $role->delete();
         $role->permission()->detach();
    }
}