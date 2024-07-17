@extends('layouts.client.app')

@section('title', 'Beranda')

@section('style')
    <style>
        .hero {
            position: relative;
            width: 100%;
            height: 70vh;
            background-color: #28a745;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .hero-left {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            z-index: 1;
        }

        .hero-right {
            position: absolute;
            bottom: 0;
            right: 0;
            height: 100%;
            z-index: 1;
        }

        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            z-index: 2;
        }

        .hero-text h1 {
            width: 80%;
        }

        .hero-text p {
            width: 50%;
        }

        @media (max-width: 768px) {
            .container {
                padding-left: 16px;
                padding-right: 16px;
            }

            .hero {
                height: 60vh;
            }

            .hero-text {
                font-size: 12px;
            }

            .hero-text h1 {
                font-size: 24px;
                width: 90%;
            }

            .hero-text p {
                width: 90%;
            }
        }
    </style>
@endsection

@section('content')
    <div class="">
        <div class="hero position-relative w-100 bg-success mt-4 mb-5">
            <svg class="hero-left" width="625" height="507" viewBox="0 0 625 507" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.2" cx="-39.3984" cy="7.5" r="488.5" stroke="url(#paint0_linear_1102_85)"
                    stroke-width="350" />
                <rect width="418.137" height="885.778" rx="50"
                    transform="matrix(-0.973116 0.230315 0.230315 0.973116 215.438 339.555)" fill="#0093DD" />
                <defs>
                    <linearGradient id="paint0_linear_1102_85" x1="665.954" y1="-170.101" x2="-527.898" y2="530.199"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="white" stop-opacity="0.4" />
                        <stop offset="1" stop-color="white" stop-opacity="0.25" />
                    </linearGradient>
                </defs>
            </svg>
            <svg class="hero-right" width="262" height="495" viewBox="0 0 262 495" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect x="192.341" y="-10.9653" width="418.137" height="885.778" rx="50"
                    transform="rotate(13.3156 192.341 -10.9653)" fill="#F8C300" />
            </svg>
            <div class="hero-text position-absolute text-center w-100">
                <h1 class="font-weight-bold mx-auto">Sustainable Development Goals
                    (SDGs)</h1>
                <h1 class="font-weight-bold mx-auto">Kota Bandar Lampung</h1>
                <p class="mt-5 mx-auto">Bandar Lampung Sehat, Cerdas, Beriman, Berbudaya, Nyaman,
                    Unggul, dan
                    Berdaya Saing
                    Berbasis Ekonomi untuk Kemakmuran Rakyat</p>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <h5 class="font-weight-light text-justify text-md">
                        <span class="font-weight-bold">Kota Bandar Lampung</span> telah berkomitmen untuk mencapai
                        <span class="font-weight-bold">Sustainable Development Goals (SDGs)</span> atau
                        <span class="font-weight-bold">Tujuan Pembangunan Berkelanjutan (TPB)</span> yang ditunjukkan dengan
                        telah disusun dan ditetapkannya
                        dokumen Rencana Aksi Daerah (RAD) SDGs/TPB Kota Bandar Lampung 2020-2024.
                    </h5>
                    <h5 class="font-weight-light text-justify text-md">
                        Ini selaras dengan dokumen RAD SDGs/TPB Provinsi Lampung yang telah ditetapkan oleh Pemerintah
                        Provinsi Lampung. Komitmen dalam perencanaan pembangunan Kota Bandar Lampung pun ditunjukkan dengan
                        telah diselaraskannya dokumen Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Kota Bandar Lampung
                        2021-2026 dengan tujuan dan target dalam SDGs. Begitu juga dengan dokumen Rencana Kerja Pemerintah
                        Daerah (RKPD) Kota Bandar Lampung yang merupakan penjabaran RPJMD untuk jangka waktu 1 (satu) tahun.
                    </h5>
                </div>
            </div>
        </div>
        <div class="container mb-3" style="border-radius: 12px">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="border-radius: 12px">
                <div class="carousel-inner" style="border-radius: 12px">
                    @foreach ($pilars as $index => $pilar)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" style="border-radius: 12px">
                            @if ($pilar->id == 1)
                                <a class="card bg-gradient-danger w-100 text-white p-5" style="border-radius: 12px"
                                    href="/pilar/{{ $pilar->id }}">
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <img src="{{ asset('assets/ikon/' . $pilar->ikon_pilar) }}" width="50"
                                            alt="">
                                    </div>
                                    <h3 class="text-center text-lg">{{ $pilar->nama_pilar }}</h3>
                                    <p class="text-center d-none d-md-block text-md col-lg-10 mx-auto">
                                        {{ $pilar->deskripsi_pilar }}
                                    </p>
                                </a>
                            @elseif ($pilar->id == 2)
                                <a class="card bg-gradient-warning w-100 text-white p-5" style="border-radius: 12px"
                                    href="/pilar/{{ $pilar->id }}">
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <img src="{{ asset('assets/ikon/' . $pilar->ikon_pilar) }}" width="50"
                                            alt="">
                                    </div>
                                    <h3 class="text-center text-lg">{{ $pilar->nama_pilar }}</h3>
                                    <p class="text-center d-none d-md-block text-md col-lg-10 mx-auto">
                                        {{ $pilar->deskripsi_pilar }}
                                    </p>
                                </a>
                            @elseif ($pilar->id == 3)
                                <a class="card bg-gradient-success w-100 text-white p-5" style="border-radius: 12px"
                                    href="/pilar/{{ $pilar->id }}">
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <img src="{{ asset('assets/ikon/' . $pilar->ikon_pilar) }}" width="50"
                                            alt="">
                                    </div>
                                    <h3 class="text-center text-lg">{{ $pilar->nama_pilar }}</h3>
                                    <p class="text-center d-none d-md-block text-md col-lg-10 mx-auto">
                                        {{ $pilar->deskripsi_pilar }}</p>
                                </a>
                            @elseif ($pilar->id == 4)
                                <a class="card bg-gradient-primary w-100 text-white p-5" style="border-radius: 12px"
                                    href="/pilar/{{ $pilar->id }}">
                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <img src="{{ asset('assets/ikon/' . $pilar->ikon_pilar) }}" width="50"
                                            alt="">
                                    </div>
                                    <h3 class="text-center text-lg">{{ $pilar->nama_pilar }}</h3>
                                    <p class="text-center d-none d-md-block text-md col-lg-10 mx-auto">
                                        {{ $pilar->deskripsi_pilar }}</p>
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="container d-md-none">
            <div id="carouseltujuan" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @foreach ($tujuans as $index => $tujuan)
                        <li data-target="#carouseltujuan" data-slide-to="{{ $index }}"
                            @if ($index == 0) class="active" @endif></li>
                    @endforeach
                </ol>
                <div class="carousel-inner rounded-lg">
                    @foreach ($tujuans as $index => $tujuan)
                        <div class="carousel-item @if ($index == 0) active @endif">
                            <a href="/tujuan/{{ $tujuan->id }}">
                                <img class="d-block w-100 rounded-lg"
                                    src="{{ asset('assets/ikon/' . $tujuan->ikon_tujuan) }}"
                                    alt="{{ $tujuan->nama_tujuan }}">
                            </a>
                        </div>
                    @endforeach
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded-lg" src="{{ asset('assets/img/logo-sdgs.png') }}"
                            alt="Logo SDGs">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouseltujuan" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouseltujuan" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="container d-none d-md-block">
            <div class="text-center">
                @foreach ($tujuans as $tujuan)
                    <a href="/tujuan/{{ $tujuan->id }}">
                        <img src="{{ asset('assets/ikon/' . $tujuan->ikon_tujuan) }}" width="184"
                            class="rounded-lg my-1" alt="{{ $tujuan->nama_tujuan }}">
                    </a>
                @endforeach
                <img src="{{ asset('assets/img/logo-sdgs.png') }}" width="184" alt="Logo SDGs">
            </div>
        </div>

    </div>

@endsection

@section('script')
    <script>
        $('.carousel[data-type="multi"] .item').each(function() {
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < 2; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>
@endsection
