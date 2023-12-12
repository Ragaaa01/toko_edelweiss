@extends('layouts.admin')

@section('title', 'Add Barang')

@section('content')
    
<h1>Add New Barang</h1>

<div class="mt-5 w-70">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="barangadd" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Nama Barang">
        </div>
        <div class="mb-3">
            <label for="harga_sewa" class="form-label">Harga Sewa</label>
            <input type="text" name="harga_sewa" id="harga_sewa" class="form-control" placeholder="Harga Sewa">
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" name="gambar" class="form-control">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" name="brand" id="brand" class="form-control" placeholder="Brand">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok Barang</label>
            <input type="text" name="stok" id="stok" class="form-control" placeholder="Stok Barang">
        </div>
        <div class="">
            <label for="deskripsi" class="">Deskripsi</label>
            <br>
        <textarea name="deskripsi" id="deskripsi" cols="120" rows="15"></textarea>
        </div>
        

        <div class="mt-3">
            <button class="btn btn-success"type="submit">Save</Button>
        </div>
    </form>
</div>

@endsection