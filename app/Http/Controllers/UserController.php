<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function home(Request $request)
    {
      $kategori = Kategori::all();

        if($request->kategori || $request->nama_barang) {
            $barang = Barang::where('nama_barang', 'like', '%'.$request->nama_barang.'%')
                ->orWhereHas('kategori', function($q) use($request) {
                    $q->where('kategori.id', $request->kategori);
            })->get();

        }
        else{
        $barang = Barang::all();
        }
       return view('frontend.home', ['barang' => $barang, 'kategori' => $kategori]);
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
