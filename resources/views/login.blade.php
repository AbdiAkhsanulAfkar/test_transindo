@extends('layouts.layout_user')
@section('title', 'Register')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Aplikasi Nilai Santri</title>
</head>
<body>
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center"><br>Login</h3>
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="/admin/actionlogin" method="post">
            @csrf
            <div class="form-group">
                    <label> Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group mb-2">
                    <label></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <center>
                <button type="submit" class="btn btn-dark btn-block">Log In</button>
                </center>
                <hr>
                <p class="text-center"> <a href="/admin/register">Register</a></p>
            </form>
        </div>
    </div>
</body>
</html>
@endsection