<?php

namespace App\Http\Controllers\Admin;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(10);

        return view('admin.users.index',compact('users'));    //send users to index page with compact
    }

     public function about(){
    

        return view('admin.users.about');    
    }

    public function show(User $user){
        // dd($user);

        $roles = Role::get();        
        $user_permissions=$user->getAllPermissions()->pluck('name')->toArray(); //get name of permissions 
        $user_roles= $user->getRoleNames()-> toArray();
        //  dd($user_permissions);
        return view('admin.users.show', compact('user','roles','user_permissions','user_roles'));
    }

    public  function updatepermissions(Request $request,User $user){

        $permissions = $request-> get('permissions');
        $roles=$request->get('roles');
        $user->syncPermissions($permissions);
        $user->syncRoles($roles);

        return redirect()->back();
    }
}
