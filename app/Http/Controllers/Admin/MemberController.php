<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function login(Request $request){
        $credentionals = $request ->only('email','password');   //get user email and password
        if (auth()->attempt($credentionals)){                   // if they are ok, redirect to index
            return redirect(route('admin.index'));
        }                                                       //else show error

        return redirect()->back()->withErrors(
            ['login' => 'Wrong Password or Username']
        );
    }


    public function logout(){
        auth()->logout();
        return redirect(route('admin.login'));
    }
}
