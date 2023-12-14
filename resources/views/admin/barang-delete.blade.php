@extends('layouts.admin')

@section('title', 'Delete Barang')


@section('content')
    <h2>Are You Sure To Delete Barang {{$barang->nama_barang}} ?</h2>
    <div class="mt-5"> 
        <a href="/barang-destroy/{{$barang->slug}}" class="btn btn-danger me-5">Sure</a>
        <a href="/barang" class="btn btn-primary">Cancel</a>
    </div>
@endsection