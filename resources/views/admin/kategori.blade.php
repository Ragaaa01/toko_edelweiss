@extends('layouts.admin')

@section('title', 'Kategori')


@section('content')
    <h1>Kategori List</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="kategoriadd" class="btn btn-primary">Add Data</a>
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
                @foreach ($kategori as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <a href="#">edit</a>
                        <a href="#">delete</a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection