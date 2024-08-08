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
            font-size: 48px;
            animation: slideInUp 1.5s ease-in-out;
        }

        .hero-text p {
            width: 50%;
            font-size: 16px;
            animation: slideInUp 2s ease-in-out;
        }

        @keyframes slideInUp {
            0% {
                transform: translateY(100%);
                opacity: 0;
            }

            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .sigeh-img {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 300px;
            height: auto;
            z-index: 3;
            animation: slideInUp 1s ease-in-out;
        }

        .patung-img {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 300px;
            height: auto;
            z-index: 3;
            animation: slideInUp 1s ease-in-out;
        }

        .kota-img {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: auto;
            z-index: 2;
            animation: slideInUp 1.5s ease-in-out;
        }

        #carousel:hover {
            filter: brightness(0.8);
        }

        .iframe-container {
            display: flex;
            justify-content: center;
        }

        .video-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 12px;
            background-color: #fff;
            padding: 20px;
            margin: 20px auto;
            max-width: 100%;
            width: 100%;
            box-sizing: border-box;
        }

        .video-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        .video-container video {
            border-radius: 12px;
            width: 100%;
            height: auto;
        }

        .scroll-animation {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-in-out, transform 1s ease-in-out;
        }

        .scroll-animation.show {
            opacity: 1;
            transform: translateY(0);
            animation: fadeInUp 2s ease-in-out forwards;
        }

        @media (max-width: 1024px) {
            .video-container {
                max-width: 60%;
            }

            .sigeh-img {
                width: 200px;
            }

            .patung-img {
                width: 200px;
            }

            .kota-img {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .video-container {
                max-width: 75%;
            }

            .video-container h2 {
                font-size: 2rem;
            }

            .container {
                padding-left: 16px;
                padding-right: 16px;
            }

            .hero {
                height: 70vh;
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

            .sigeh-img {
                width: 100px;
            }

            .patung-img {
                width: 100px;
            }

            .kota-img {
                width: 100%;
            }
        }

        @media (max-width: 374px) {
            .sigeh-img {
                width: 60px;
            }

            .patung-img {
                width: 60px;
            }

            .kota-img {
                width: 100%;
            }
        }
    </style>
@endsection

@section('content')
    <div class="">
        <div class="hero position-relative w-100 bg-success mt-4 mb-5">
            <img src="./assets/img/sigeh.png" alt="" class="sigeh-img">
            <img src="./assets/img/patung.png" alt="" class="patung-img">
            <img src="./assets/img/kota.png" alt="" class="kota-img">
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
                    <h5 class="font-weight-light text-justify">
                        <span class="font-weight-bold">Kota Bandar Lampung</span> telah berkomitmen untuk mencapai
                        <span class="font-weight-bold">Sustainable Development Goals (SDGs)</span> atau
                        <span class="font-weight-bold">Tujuan Pembangunan Berkelanjutan (TPB)</span> yang ditunjukkan dengan
                        telah disusun dan ditetapkannya
                        dokumen Rencana Aksi Daerah (RAD) SDGs/TPB Kota Bandar Lampung 2020-2024.
                    </h5>
                    <h5 class="font-weight-light text-justify">
                        Ini selaras dengan dokumen RAD SDGs/TPB Provinsi Lampung yang telah ditetapkan oleh Pemerintah
                        Provinsi Lampung. Komitmen dalam perencanaan pembangunan Kota Bandar Lampung pun ditunjukkan dengan
                        telah diselaraskannya dokumen Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Kota Bandar Lampung
                        2021-2026 dengan tujuan dan target dalam SDGs. Begitu juga dengan dokumen Rencana Kerja Pemerintah
                        Daerah (RKPD) Kota Bandar Lampung yang merupakan penjabaran RPJMD untuk jangka waktu 1 (satu) tahun.
                    </h5>
                </div>
            </div>
        </div>
        <div class="container mb-5 scroll-animation">
            <div class="video-container">
                <h2 class="font-weight-bold mx-auto">Dashboard SDGs Kota Bandar Lampung</h2>
                <video controls>
                    <source src="{{ asset('assets/video/Video-SDGs-Kota-Bandar-Lampung.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
        <div class="container mb-3 scroll-animation" style="border-radius: 12px">
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
        <div class="container d-md-none scroll-animation">
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
                    <a href="/tujuan/{{ $tujuan->id }}" id="carousel" class="scroll-animation">
                        <img src="{{ asset('assets/ikon/' . $tujuan->ikon_tujuan) }}" width="184"
                            class="rounded-lg my-1" alt="{{ $tujuan->nama_tujuan }}">
                    </a>
                @endforeach
                <img src="{{ asset('assets/img/logo-sdgs.png') }}" width="184" alt="Logo SDGs"
                    class="scroll-animation">
            </div>
        </div>

    </div>
@endsection

@section('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollElements = document.querySelectorAll('.scroll-animation');

            const elementInView = (el, offset = 0) => {
                const elementTop = el.getBoundingClientRect().top;
                return (
                    elementTop <= ((window.innerHeight || document.documentElement.clientHeight) - offset)
                );
            };

            const displayScrollElement = (element) => {
                element.classList.add('show');
            };

            const hideScrollElement = (element) => {
                element.classList.remove('show');
            };

            const handleScrollAnimation = () => {
                scrollElements.forEach((el) => {
                    if (elementInView(el, 100)) {
                        displayScrollElement(el);
                    } else {
                        hideScrollElement(el);
                    }
                });
            };

            window.addEventListener('scroll', () => {
                handleScrollAnimation();
            });

            handleScrollAnimation();
        });
    </script>
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
