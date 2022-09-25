<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Registeration extends Controller
{
    //
    public function form(){
        return view('form');
    }

    public function register(Request $request){
        $request->validate(
            [
              'fullname'=>'required',
              'email'=>'required',
              'address'=>'required',
              'password'=>'required',
              'confirm_password'=>'required|same:password'
            ]
            );
       return view('welcome');
    }
}
