@extends('layouts.admin')

@section('title', 'Delete Kategori')


@section('content')
    <h2>Are You Sure To Delete {{$kategori->name}} ?</h2>
    <div class="mt-5">
        <a href="/kategori-destroy/{{$kategori->slug}}" class="btn btn-danger me-5">Sure</a>
        <a href="/kategori" class="btn btn-primary">Cancel</a>
    </div>
@endsection