<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home(Request $request)
    {
       return view('frontend.home');
    }
    public function detail(Request $request)
    {
       return view('frontend.detail');
    }
    public function kontak(Request $request)
    {
       return view('frontend.kontak');
    }
}
