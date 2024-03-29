<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title')</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('halaman/master/master.styles.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/fontawesome/css/all.css') }}">
    @yield('css')


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profil-sekolah">Profile Sekolah</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Informasi Akademik
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/pendaftaran">Pendaftaran Siswa</a>
                        <a class="dropdown-item" href="/pengumuman-ppdb">Pengumuman PPDB</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/struktur-organisasi">Struktur Organisasi</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Galeri Sekolah
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/galeri-foto">Galeri Foto</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/galeri-video">Galeri Video</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/list-artikel">Artikel Sekolah</a>
                </li>
                @if (Auth::user())
                    <li>
                        <a class="nav-link" href="/dashboard/panel-admin">Dashboard</a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
    <div class="header" style="padding: 50px 15px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-10">
                    <div class="header-text">
                        <h2>SD DIPONEGORO SURABAYA</h2>
                        <p>
                            <strong>JL. Kedung Sroko V No. 15 - 21, Tambaksari, Surabaya.<br>
                                Telepon 031-5124123 | 081124918724</strong>
                        </p>
                        <p>Pantang pulang sebelum khatam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- ISI KONTEN --}}
    <div class="container bg-image">
        <div class="col-xl-12">
            <div class="my-4">
                @yield('content')
            </div>
        </div>
    </div>

    <div class="footer">
        Admin@JD<br>
        2020 - 2021
    </div>

</body>
{{-- Script --}}

<script src="{{ asset('plugin/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('plugin/fontawesome/js/all.js') }}"></script>
<script src="{{ asset('plugin/bootstrap/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('plugin/popper.min.js') }}"></script>
<script src="{{ asset('plugin/bootstrap/js/bootstrap.js') }}"></script>
@yield('script')

</html>