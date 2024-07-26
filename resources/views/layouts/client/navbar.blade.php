@section('style')
    <style>
        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            margin-right: 10px;
            /* Sesuaikan jarak antara logo dan teks */
        }

        .navbar-brand-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            /* Pastikan teks rata kiri */
        }

        .nav-link {
            font-weight: normal;
        }

        .nav-link.active {
            font-weight: bolder;
        }
    </style>
@endsection

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top px-lg-5 shadow">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('assets/img/logo.png') }}" width="50" alt="Logo">
            <div class="navbar-brand-text ml-2">
                <div class="text-sm">SDGs</div>
                <div class="text-sm">Bandar Lampung</div>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('dashboard*') ? 'active' : '' }}"
                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        Dashboard
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/pembanding">Analisis Pembanding</a>
                        <a class="dropdown-item" href="/geospasial">Peta Geospasial</a>
                        <a class="dropdown-item" href="/prediksi">Prediksi</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tujuan') ? 'active' : '' }}" href="/tujuan">Tujuan SDGs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dokumen') ? 'active' : '' }}" href="/dokumen">Dokumen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
                </li>
            </ul>
            <a href="/login" class="btn btn-success py-2 px-3 ml-lg-2 mt-2 mt-md-0">Login</a>
        </div>
    </div>
</nav>
