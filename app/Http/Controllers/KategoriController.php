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
        $kategori = Kategori::create($request->all());
        return redirect('admin.kategori');
    }
}
