@extends('layouts.admin')

@section('title', 'Kategori')


@section('content')
    <h1>Kategori List</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="kategori-deleted-list" class="btn btn-secondary me-5">View Deleted Data</a>
        <a href="kategoriadd" class="btn btn-primary">Add Data</a>
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
                @foreach ($kategori as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>
                        <a href="kategori-edit/{{$item->slug}}">edit</a>
                        <a href="kategori-delete/{{$item->slug}}">delete</a>
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection