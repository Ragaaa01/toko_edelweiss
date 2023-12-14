@extends('layouts.admin')

@section('title', 'Edit Barang')

@section('content')
<!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> -->
<h1>Edit Barang</h1>

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

    <form action="/barang-edit/{{$barang->slug}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nama_barang" class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" id="nama_barang" class="form-control" placeholder="Nama Barang" value="{{$barang->nama_barang}}">
        </div>
        <div class="mb-3">
            <label for="harga_sewa" class="form-label">Harga Sewa</label>
            <input type="text" name="harga_sewa" id="harga_sewa" class="form-control" placeholder="Harga Sewa" value="{{$barang->harga_sewa}}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" name="image" class="form-control">
        </div>
        <div class="mb-3">
            <label for="currentImage" class="form-label">Current Image</label>
            <br>
            @if ($barang->gambar!='')
                <img src="{{ asset('storage/gambar/'.$barang->gambar)}}" alt="" width="300px">
            @else
            <img src="{{ asset('image/No-image-found.jpg')}}" alt="" width="300px">
            @endif
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" name="brand" id="brand" class="form-control" placeholder="Brand" value="{{$barang->brand}}">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok Barang</label>
            <input type="text" name="stok" id="stok" class="form-control" placeholder="Stok Barang" value="{{$barang->stok}}">
        </div>
        <div class="">
            <label for="deskripsi" class="">Deskripsi</label>
            <br>
        <textarea name="deskripsi" id="deskripsi" cols="120" rows="15" value="{{$barang->deskripsi}}"></textarea>
        </div> <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori[]" id="kategori" class="form-control"  >
            <option value="">Pilih Kategori</option>
                @foreach ($kategori as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="currentKategori" class="form-label">Current Kategori</label>
            <ul>
                @foreach ($barang->kategori as $kategori)
                    <li>{{$kategori->name}}</li>
                @endforeach
            </ul>
        </div>

        <div class="mt-3">
            <button class="btn btn-success"type="submit">Save</Button>
        </div>
    </form>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
    $('.select-multiple').select2();
});
</script> -->
@endsection