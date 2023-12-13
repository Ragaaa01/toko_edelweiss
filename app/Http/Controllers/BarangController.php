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
        $validated = $request->validate([
            'nama_barang' => 'required|max:255',
        ]);
        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->nama_gambar.'.'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
        }
        $request['gambar'] = $newName;

        $barang = Barang::create($request->all());
        return redirect('barang')->with('status', 'Barang Berhasil Ditambahkan');
    }
}
