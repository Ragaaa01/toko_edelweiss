@extends('layouts.admin')

@section('title', 'Deleted Barang')


@section('content')
    <h1>Deleted Kategori List</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="barang" class="btn btn-primary">Kembali</a>
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
                </tr>
            </thead>
            <tbody>
                @foreach ($deletedBarang as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>{{ $item->harga_sewa }}</td>
                    <td>{{ $item->gambar }}</td>
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
                        <a href="barang-restore/{{$item->slug}}">restore</a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection