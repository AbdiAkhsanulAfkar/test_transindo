@section('title', 'Detail')

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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <img src="{{ asset('img/icon.png') }}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
                Agen X Order</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="/admin">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/admin/verifikasi">Verifikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/admin/laporan">Laporan</a>
                    </li>
                </ul>
                <a class="button" style="color: white;" href="/login">Logout</a>
            </div>
        </div>
    </nav>
    <div class="container">
    <div class="row justify-content-center">
    <widget type="ticket" class="--flex-column mb-4">
        <div class="top --flex-column">
            <div class="bandname -bold">Agen X Order Tiket Detail</div>
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
                @foreach($tiket as $t)
                <div class="price --flex-column">
                    <div class="label_nama">{{ $t->nama }}</div>
                    <div class="label_email">{{ $t->email }}</div>
                    <div class="label_alamat">{{ $t->alamat }}</div>
                    <div class="label_no">{{ $t->no_hp }}</div>
                    <div class="label_tgl">{{ $t->created_at }}</div>
                    <div class="label_stts -bold">{{ $t->status }}</div>
                </div>
            </div>
            <p style="font-size: 10px;">*Silahkan simpan dengan cara melakukan tangkap layar pada HP anda</p>

        </div>
        <div class="rip"></div>
        <div class="bottom --flex-column">
            <center>
                <h4>Kode Pemesanan - {{ $t->kode }}</h4>
            </center>
        </div>
    </widget>
    @if($t->status == "Belum Bayar")
    <form method="POST" action="/admin/update_verifikasi">
        {{ csrf_field() }}
        <div class="mb-3">
            <input type="hidden" class="form-control" id="kode" name="kode" value="{{ $t->kode }}">
        </div>
        
        <center>
            <button type="submit" class="btn btn-dark btn-user btn-block mt-4">Verifikasi</button>
        </center>
    </form>
    @else
    <center>
        <h4>Tiket sudah terverifikasi silakan kembali</h4>
        <a href="/admin/verifikasi" type="button" class="btn btn-dark">Kembali</a>
    </center>    
    @endif
    @endforeach
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
