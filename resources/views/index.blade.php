@extends('layouts.layout_user')
@section('title', 'Home')

@section('content')
<div class="mx-auto" style="width: 300px;">
  <h1>Order Details</h1>
</div>
<div class="mt-4">
<form method="POST" action="/order">
{{ csrf_field() }}
<div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat">
  </div>
  <div class="mb-3">
    <label for="no" class="form-label">Nomor Hp.</label>
    <input type="text" class="form-control" id="no" name="no_hp" aria-describedby="emailHelp">
  </div>
  <center>
  <button type="submit" class="btn btn-dark btn-user btn-block mt-4">Submit</button>
  </center>
  
</form>
</div>
@endsection
