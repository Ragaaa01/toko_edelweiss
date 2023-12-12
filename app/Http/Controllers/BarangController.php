<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view('admin.barang', ['barang'=> $barang]);
    }

    public function add()
    {
        return view('admin.barangadd');
    }

    public function store(Request $request)
    {
        $barang = Barang::create($request->all());
        return redirect('barang')->with('status', 'Barang Berhasil Ditambahkan');
    }
}
