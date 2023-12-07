@extends('layouts.admin')

@section('title', 'Edit Kategori')

@section('content')
    
<h1>Edit Kategori</h1>

<div class="mt-5 w-70">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="/kategori-edit/{{$kategori->slug}}" method="POST">
        @csrf
        @method('put')
        <div>
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" value="{{$kategori->name}}" class="form-controls">
        </div>

        <div class="mt-3">
            <button class="btn btn-success"type="submit">Update</Button>
        </div>
    </form>
</div>

@endsection