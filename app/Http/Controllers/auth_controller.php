<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class auth_controller extends Controller
{
    public function login(){
        return view("auth.loginAdmin");
    }
    public function authen(Request $request){
        $login_data = ["email"=>$request->email,"password"=>$request->passsword];
        if (Auth::attempt($login_data)){

            return redirect()->route("dashboard.news.index");
        }
        return redirect()->back()->with("error","login is invalid");
    }

    public function log_out(){
        if (Auth::check()){
            Auth::logout();
        }
        return redirect("frontsite.home");

    }
}
