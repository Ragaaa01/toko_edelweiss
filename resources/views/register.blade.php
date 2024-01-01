@extends('layouts.app')

@section('title', 'Register')

@section('content')
<a href="/"><h5>< Kembali</h5></a>
<div class="container mt-5">   
@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                

                
        <div class="row justify-content-center">       
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                <h2 class="text-center">Registrasi</h2>
            </div>
                <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" style="width: 500px">
                {{ session('message')}}
                </div>
                @endif
                <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="no_telpon">No Telephone</label>
                    <input type="text" class="form-control" id="no_telpon" name="no_telpon" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="" rows="5" class="form-control"></textarea>
                </div>
                <button type="submit" class="mt-3 btn btn-primary form-control">Registrasi</button>
                <div class="text-center">
                    <a href="login" >Have account ? Login</a>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection