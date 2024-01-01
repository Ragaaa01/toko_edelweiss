@extends('layouts.admin')

@section('title', 'Delete User')


@section('content')
    <h2>Apakah kamu ingin menghapus user {{$user->name}} ?</h2>
    <div class="mt-5">
        <a href="/user-destroy/{{$user->slug}}" class="btn btn-danger me-5">Yes</a>
        <a href="/datauser" class="btn btn-primary">No</a>
    </div>
@endsection