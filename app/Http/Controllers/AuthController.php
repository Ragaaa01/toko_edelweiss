<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request){
        return view('/login');
    }

    public function register(){
        return view('/register');
    }

    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        // cek login valid       
        if (Auth::attempt($credentials)) {
            // cek apakah status user = active
            if (Auth::user()->status != 'active'){
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                Session::flash('status', 'failed');
                Session::flash('message', 'Akunmu belum aktif, Tunggu dalam 24 jam!!');
                return redirect('/login');
            }
            //$request->session()->regenerate();
            if(Auth::user()->role_id == 1){
                return redirect('dashboard'); 
            }          

            if(Auth::user()->role_id == 2){
                return redirect('home');
            }
        }
        Session::flash('status', 'failed');
        Session::flash('message', 'Login Invalid');
        return redirect('/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function registerProcess(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|max:255',
            'no_telpon' => 'required|max:255',
            'alamat' => 'required|max:255',
        ]);
        
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Pendaftaran berhasil, Akun akan aktif dalam 1 x 24 jam');
        return redirect('register');
    }
    
}
