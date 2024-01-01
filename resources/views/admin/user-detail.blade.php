@extends('layouts.admin')

@section('title', 'Detail User')
@section('phead', 'Detail User')
@section('content')
<div class="mt-5 d-flex justify-content-end">
        @if ($user->status == 'inactive')
        <a href="/user-approve/{{$user->slug}}" class="btn btn-info">Aktifkan User</a>
        @endif
    </div>

    <div class="mt-5">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    </div>

    <div class="my-5 w-25">
    <div class="mb-3">
            <label for="" class="form-label">Nama</label>
            <input type="text" class="form-control" redonly value="{{$user->name}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input type="text" class="form-control" redonly value="{{$user->email}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">No Telphone</label>
            <input type="text" class="form-control" redonly value="{{$user->no_telpon}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Alamat</label>
            <textarea name="" id="" cols="30" rows="5" class="form-control" style="resize: none">{{$user->alamat}}</textarea>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Status</label>
            <input type="text" class="form-control" redonly value="{{$user->status}}">
        </div>
    </div>
@endsection