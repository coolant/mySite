<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

      public function register(Request $request){
        
        $data = $request->only('name','surname','email','password','repassword');
        // dd($data);

        if($data['password'] !== $data['repassword']){
            $message = ['type'=>'danger','description'=>'Passwords are not matched'];
            return redirect()->back()->withInput()->with(['message'=>$message]);
        }




        User::create([
            'name' => $data['name'].' '. $data['surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'aboutme'=>'about me'
        ]);
          $message = ['type'=>'success','description'=>'You are successfully registered!'];
         return redirect(route('admin.login'))->with(['message'=>$message]);
    }
}
