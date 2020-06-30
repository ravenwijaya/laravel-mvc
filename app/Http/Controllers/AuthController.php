<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }
    public function welcome(){
       // dd($request->all());
        return view('welcome');
    }
    public function welcome_post(Request $request){
      //  dd($request->all());
        $nama1=$request["depan"];
        $nama2=$request["blakang"];
      //  $nama2=$request["blakang"];
        return view('welcome',["namad"=>$nama1,"namab"=>$nama2]);
    }
}
