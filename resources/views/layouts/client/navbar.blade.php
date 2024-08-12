<style>
    .active {
        font-weight: bold;
    }

    .active i {
        color: green;
    }
</style>

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
        <div class="collapse navbar-collapse p-2 p-md-2" id="navbarNav">
            <ul class="navbar-nav ml-auto py-3 py-md-0">
                <li class="nav-item py-2 py-md-0">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">
                        <i class="fas fa-home mr-1"></i> Beranda
                    </a>
                </li>
                <li class="nav-item dropdown py-2 py-md-0">
                    <a class="nav-link dropdown-toggle {{ request()->is('dashboard*') ? 'active' : '' }}"
                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fas fa-tachometer-alt mr-1"></i> Dashboard
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/pembanding"><i class="fas fa-chart-bar mr-1"></i> Analisis
                            Pembanding</a>
                        <a class="dropdown-item" href="/geospasial"><i class="fas fa-map mr-1"></i> Peta Geospasial</a>
                        <a class="dropdown-item" href="/prediksi"><i class="fas fa-chart-line mr-1"></i> Prediksi</a>
                    </div>
                </li>
                <li class="nav-item py-2 py-md-0">
                    <a class="nav-link {{ request()->is('tujuan') ? 'active' : '' }}" href="/tujuan">
                        <i class="fas fa-bullseye mr-1"></i> Tujuan SDGs
                    </a>
                </li>
                <li class="nav-item dropdown py-2 py-md-0">
                    <a class="nav-link dropdown-toggle {{ request()->is('informasi*') ? 'active' : '' }}"
                        id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="fas fa-info-circle mr-1"></i> Informasi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/berita"><i class="fas fa-globe mr-1"></i> Berita</a>
                        <a class="dropdown-item" href="/dokumen"><i class="fas fa-file-alt mr-1"></i> Dokumen</a>
                    </div>
                </li>
                <li class="nav-item py-2 py-md-0">
                    <a class="nav-link {{ request()->is('kontak') ? 'active' : '' }}" href="/kontak">
                        <i class="fas fa-envelope mr-1"></i> Kontak
                    </a>
                </li>
            </ul>
            <a href="/login" class="btn btn-success py-2 px-3 ml-lg-2 mt-2 mt-md-0">
                <i class="fas fa-sign-in-alt mr-1"></i> Login
            </a>
        </div>
    </div>
</nav>
