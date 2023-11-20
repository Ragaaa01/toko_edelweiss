@extends('layouts.app')

@section('title',$title)

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <div class="card-header">
                <h2 class="text-center">Login</h2>
            </div>
            <div class="card-body">
                <form action="/process_login" method="post">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="mt-3 btn btn-primary form-control">Login</button>
                <div class="text-center">
                    <a href="/register" >Sign Up</a>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
    </div>
@endsection
