@section('title', 'Data')
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AGEN X TICKET - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}">
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
                        <a class="nav-link active" aria-current="page" href="#">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Verifikasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Laporan</a>
                    </li>
                </ul>
                <a class="button" style="color: white;" href="/login">Logout</a>
            </div>
        </div>
    </nav>
    <center>
        <h1 class="mt-4 mb-4"> Edit Data</h2>
    </center>
    @foreach ($tiket as $t)
    <div class="container">
        <div class="row justify-content-center">
            <div class="mt-4">
                <form method="POST" action="/admin/update">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $t->id }}">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ $t->nama }}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="{{ $t->email }}">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $t->alamat }}">
                    </div>
                    <div class="mb-3">
                        <label for="no" class="form-label">Nomor Hp.</label>
                        <input type="text" class="form-control" id="no" name="no_hp" value="{{ $t->no_hp }}">
                    </div>
                    @endforeach
                    <center>
                        <button type="submit" class="btn btn-dark btn-user btn-block mt-4">Submit</button>
                    </center>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>