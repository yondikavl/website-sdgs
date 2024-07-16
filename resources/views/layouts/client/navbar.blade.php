<nav class="navbar navbar-expand-lg navbar-light bg-light py-2 px-3 fixed-top">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}" width="50" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto ml-md-4 my-4 my-md-0">
            <li class="nav-item my-2 my-md-0">
                <a class="nav-link font-weight-bold" href="/">Beranda</a>
            </li>
            <li class="nav-item dropdown my-2 my-md-0">
                <a class="nav-link dropdown-toggle font-weight-bold" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dashboard
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/pembanding">Analisis Pembanding</a>
                    <a class="dropdown-item" href="/geospasial">Peta Geospasial</a>
                    <a class="dropdown-item" href="/prediksi">Prediksi</a>
                </div>
            </li>
            <li class="nav-item my-2 my-md-0">
                <a class="nav-link font-weight-bold" href="/tujuan">Tujuan SDGs</a>
            </li>
            <li class="nav-item my-2 my-md-0">
                <a class="nav-link font-weight-bold" href="/kontak">Kontak</a>
            </li>
        </ul>
        <a class="navbar-brand ml-auto" href="#"><img src="{{ asset('assets/img/logo-sdgs.png') }}" width="50"
                alt=""></a>
    </div>
</nav>
<div class="container-fluid px-0">
    <div class="row no-gutters">
        <div class="col-12">
            <img class="w-100" src="{{ asset('assets/img/slider.png') }}" alt="">
        </div>
    </div>
</div>
