<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Authcontroller extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function proses_login(Request $request){
    $this->validate($request,[
        'email' =>'required',
        'password' =>'required|min:6']);

        if(Auth::attempt($request->only('email','password'))){
            $role = DB::table('users')->where('email',$request->email)->first();
            if($role->status=='0'){
                return redirect('/dashboard');
            }//admin
            else if($role->status=='1'){
                return redirect ('/home');
            }//users
        } else{ 
            return redirect('/login');
            }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    //
}
