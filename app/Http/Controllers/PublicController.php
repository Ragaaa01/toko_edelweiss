<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(Request $request)
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
        return view('public', ['barang' => $barang, 'kategori' => $kategori]);
    }
}
