<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = kategori::all();
        return view('admin.kategori', ['kategori' => $kategori]);
    }
    
    public function add()
    {
        return view('admin.kategoriadd');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:kategori|max:100',
        ]);

        $kategori = Kategori::create($request->all());
        return redirect('kategori')->with('status', 'Kategori Berhasil Ditambahkan');
    }

    public function edit($slug){
        $kategori = Kategori::where('slug', $slug)->first();
        return view('admin.kategori-edit', ['kategori' => $kategori]);
    }

    public function update(Request $request, $slug)
    {
        $validated = $request->validate([
            'name' => 'required|unique:kategori|max:100',
        ]);

        $kategori = Kategori::where('slug', $slug)->first();
        $kategori->update($request->all());
        $kategori->slug = null;
        return redirect('kategori')->with('status', 'Kategori Berhasil Ditambahkan');
    }

    public function delete($slug)
    {
        $kategori = Kategori::where('slug', $slug)->first(); 
        return view('admin.kategori-delete', ['kategori' => $kategori]); 
    }

    public function destroy($slug)
    {
        $kategori = Kategori::where('slug', $slug)->first();
        $kategori->delete();
        return redirect('kategori')->with('status', 'Kategori Berhasil Dihapus');
    }

    public function deletedKategori()
    {
        $deletedKategori = Kategori::onlyTrashed()->get();
        return view('admin.kategori-deleted-list', ['deletedKategori' => $deletedKategori]);
    }

    public function restore($slug)
    {
        $kategori = Kategori::withTrashed()->where('slug', $slug)->first();
        $kategori->restore();
        return redirect('kategori')->with('status', 'Kategori Berhasil Dikembalikan');
    }
}
