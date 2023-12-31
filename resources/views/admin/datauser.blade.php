@extends('layouts.admin')

@section('title', 'Data User')
@section('phead', 'Data User')
@section('content')
<div class="mt-5 d-flex justify-content-end">
        <a href="user-banned-list" class="btn btn-secondary me-5">Data Blokir User</a>
        <a href="registered-user" class="btn btn-primary">Data User Baru</a>
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
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No Telphone</th>
                    <th>Alamat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>              
                    @foreach ($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->no_telpon }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <a href="user-detail/{{$item->slug}}">detail</a> |
                            <a href="user-ban/{{$item->slug}}">ban user</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection