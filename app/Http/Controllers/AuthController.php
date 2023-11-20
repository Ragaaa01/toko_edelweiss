<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request){
        $title = "Edelweiss | Login";
        return view('/login', compact('title'));
    }

    public function register(){
        $title = "Edelweiss | Register";
        return view('/register', compact('title'));
    }
}
