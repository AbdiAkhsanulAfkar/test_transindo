@extends('layouts.layout_user')
@section('title', 'Detail')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AGEN X TICKET - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}">
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/199011/1.1.0.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,700'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <widget type="ticket" class="--flex-column">
        <div class="top --flex-column">
            <div class="bandname -bold">Agen X Booking Tiket Detail</div>
            <div class="tourname">Konser Musik</div>
            <div class="deetz --flex-row-j!sb">
                <div class="event --flex-column">
                    <div class="nama">Nama</div>
                    <div class="email">Email</div>
                    <div class="alamat">Alamat</div>
                    <div class="no">Nomor Handphone</div>
                    <div class="tgl">Tanggal Pemesanan</div>
                    <div class="stts -bold">Status</div>
                </div>
                @foreach($tranksaksi as $t)
                <div class="price --flex-column">
                    <div class="label_nama">{{ $t->nama }}</div>
                    <div class="label_email">{{ $t->email }}</div>
                    <div class="label_alamat">{{ $t->alamat }}</div>
                    <div class="label_no">{{ $t->no_hp }}</div>
                    <div class="label_tgl">{{ $t->created_at }}</div>
                    <div class="label_stts -bold">{{ $t->status }}</div>
                </div>
            </div>
            <p style="font-size: 10px;" >*Silahkan simpan dengan cara melakukan tangkap layar pada HP anda</p>

            

        </div>
        <div class="rip"></div>
        <div class="bottom --flex-column">
            <center><h4>Kode Booking - {{ $t->kode }}</h4></center>
        </div>
        @endforeach
    </widget>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
@endsection