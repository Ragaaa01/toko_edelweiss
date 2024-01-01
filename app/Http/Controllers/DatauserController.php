<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DatauserController extends Controller
{
    public function index()
    {
        $users = User::where('role_id', 2)->where('status', 'active')->get();
        return view('admin.datauser', ['users' => $users]);
    }

    public function resgisteredUser()
    {
        $registeredUsers = User::where('status', 'inactive')->where('role_id', 2)->get();
        return view('admin.registered-user', ['registeredUsers' => $registeredUsers]);
    }
    
    public function show($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('admin.user-detail', ['user' => $user]);
    }
    
    public function approve($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->status = 'active';
        $user->save();
        return redirect('user-detail/'.$slug)->with('status', 'User Berhasil Diaktifkan');
    }

    public function delete($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('admin.user-ban', ['user' => $user]);
        
    }

    public function destroy($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->delete();
        return redirect('datauser')->with('status', 'User Berhasil Dihapus');
    }

    public function bannedUser()
    {
        $bannedUser = User::onlyTrashed()->get();
        return view('admin.user-banned-list', ['bannedUser' => $bannedUser]);
    }

    public function restore($slug)
    {
        $user = User::withTrashed()->where('slug', $slug)->first();
        $user->restore();
        return redirect('datauser')->with('status', 'U  ser Berhasil Dikembalikan');
    }

}
