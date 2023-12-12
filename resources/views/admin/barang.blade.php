@extends('layouts.admin')

@section('title', 'Data Barang')
@section('phead', 'Data Barang')
@section('content')
    <h1>Ini halaman data barang</h1>
    
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
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barang as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->harga_sewa }}</td>
                    <td>{{ $item->gambar }}</td>
                    <td>{{ $item->brand }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->deskripsi }}</td>
                    <td>
                        <a href="#">edit</a>
                        <a href="#">delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection