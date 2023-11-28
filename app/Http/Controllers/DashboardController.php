<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $barangCount = Barang::count();
        $kategoriCount = Kategori::count();
        $userCount = User::count();
       return view('admin.dashboard', compact('barangCount', 'kategoriCount', 'userCount'));
    }
}
