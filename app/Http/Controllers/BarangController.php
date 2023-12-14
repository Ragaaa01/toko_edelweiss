<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
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
        $kategori = Kategori::all();
        return view('admin.barangadd', ['kategori' => $kategori]);
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
        $barang->kategori()->sync($request->kategori);
        return redirect('barang')->with('status', 'Barang Berhasil Ditambahkan');
    }

    public function edit($slug)
    {
        $barang = Barang::where('slug', $slug)->first();
        $kategori = Kategori::all();
        return view('admin.barang-edit', ['kategori' => $kategori, 'barang' => $barang ]);
    }

    public function update(Request $request, $slug)
    {
       
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->nama_gambar.'.'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('gambar', $newName);
            $request['gambar'] = $newName;
        }

       

        $barang = Barang::where('slug', $slug)->first();
        $barang->update($request->all());

        if($request->kategori){
            $barang->kategori()->sync($request->kategori);
        }
        return redirect('barang')->with('status', 'Barang Berhasil Diupdate');
        
    }

    public function delete($slug)
    {
        $barang = Barang::where('slug', $slug)->first();
        return view('admin.barang-delete', ['barang' => $barang]);
    }
    public function destroy($slug)
    {
        $kategori = Barang::where('slug', $slug)->first();
        $kategori->delete();
        return redirect('barang')->with('status', 'Barang Berhasil Dihapus');
    }
    public function deletedBarang()
    {
        $deletedBarang = Barang::onlyTrashed()->get();
        return view('admin.barang-deleted-list', ['deletedBarang' => $deletedBarang]);
    }
    public function restore($slug)
    {
        $kategori = Barang::withTrashed()->where('slug', $slug)->first();
        $kategori->restore();
        return redirect('barang')->with('status', 'Barang Berhasil Dikembalikan');
    }
}
