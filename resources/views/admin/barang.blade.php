@extends('layouts.admin')

@section('title', 'Data Barang')
@section('phead', 'Data Barang')
@section('content')
    <h1>Ini halaman data barang</h1>

    <div class="my-5 d-flex justify-content-end">
        <a href="barang-deleted-list" class="btn btn-secondary me-5">View Deleted Data</a>
        <a href="barangadd" class="btn btn-primary">Add Data</a>
    </div>

    <div class="mt-5">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    </div>
    
    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga Sewa</th>
                    <th>Gambar</th>
                    <th>Brand</th>
                    <th>Stok</th>
                    <th>Status</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>Rp {{ $item->harga_sewa }}</td>
                    <td>{{ asset('storage/gambar/'.$item->gambar) }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->status }}</td>
                    <td>
                       @foreach ($item->kategori as $kategori)
                       {{$kategori->name}} <br>
                       @endforeach
                    </td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <a href="barang-edit/{{$item->slug}}">edit</a>
                        <a href="barang-delete/{{$item->slug}}">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection