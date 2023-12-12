@extends('layouts.admin')

@section('title', 'Deleted Kategori')


@section('content')
    <h1>Deleted Kategori List</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="kategori" class="btn btn-primary">Kembali</a>
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
                    <th>Nomor</th>
                    <th>Nama</th>
                    <th>Jenis</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deletedKategori as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="kategori-restore/{{$item->slug}}">restore</a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection