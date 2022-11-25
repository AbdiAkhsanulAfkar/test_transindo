@extends('layouts.layout_user')
@section('title', 'Register')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
        <div class="col-md-4 col-md-offset-4">
        <h2 class="text-center">FORM REGISTER USER</h3>
            <hr>
            @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
            @endif
            <form action="/admin/actionregister" method="post">
                @csrf
                <div class="form-group">
                    <label> Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label> Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group mb-2">
                    <label></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <center><button type="submit" class="btn btn-dark btn-block"> Register</button></center>
                <p class="text-center">Sudah punya akun?<a href="/admin/login">Login</a> disini</p>
                <hr>
                
            </form>
    </div>
</body>

</html>
@endsection