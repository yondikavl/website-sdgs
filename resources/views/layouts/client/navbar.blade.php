@section('style')
    <style>
        .navbar {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-link {
            font-weight: bold;
        }
    </style>
@endsection

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top px-lg-5">
    <a class="navbar-brand" href="/"><img src="{{ asset('assets/img/logo.png') }}" width="50" alt="Logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Dashboard
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/pembanding">Analisis Pembanding</a>
                    <a class="dropdown-item" href="/geospasial">Peta Geospasial</a>
                    <a class="dropdown-item" href="/prediksi">Prediksi</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tujuan">Tujuan SDGs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/kontak">Kontak</a>
            </li>
        </ul>
    </div>
</nav>
