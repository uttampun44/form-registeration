<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class Customer extends Controller
{
    //
    public function index(){
        return view('register');
    }

    public function store(Request $request){
             
        
    }
}
