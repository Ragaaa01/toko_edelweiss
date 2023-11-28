@extends('layouts.admin')

@section('title', 'Add Kategori')

@section('content')
    
<h1>Add New Kategori</h1>

<div class="mt-5 w-70">
    <form action="kategori-add" method="post">
        @csrf
        <div>
            <label for="nama" class="form-label">Nama</label>
            <input type="text" nama="nama" id="nama" class="form-controls">
        </div>

        <div class="mt-3">
            <button class="btn btn-success"type="submit">Save</Button>
        </div>
    </form>
</div>

@endsection