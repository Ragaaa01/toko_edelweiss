@extends('layouts.admin')

@section('title', 'Data User Baru')
@section('phead', 'Data User Baru')
@section('content')
<div class="mt-5 d-flex justify-content-end">
        
        <a href="datauser" class="btn btn-primary">Approved User List</a>
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
            @foreach ($registeredUsers as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->no_telpon }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>
                            <a href="user-detail/{{$item->slug}}">detail</a> 
                            
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection