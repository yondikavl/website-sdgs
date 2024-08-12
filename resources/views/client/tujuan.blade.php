@extends('layouts.client.app')

@section('title', 'Tujuan')

@section('style')
    <style>
        #carousel:hover {
            filter: brightness(0.8);
        }

        .card-tujuan:hover {
            transform: translateY(-10px);
        }

        .svg-atas {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .svg-bawah {
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: -1;
            margin-bottom: 100px;
        }

        @media (min-width: 768px) {
            .d-md-flex {
                display: flex !important;
            }

            .d-md-none {
                display: none !important;
            }
        }
    </style>
@endsection

@section('content')

    <svg class="svg-atas" width="506" height="490" viewBox="0 0 506 490" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle opacity="0.2" cx="31.1897" cy="15.0955" r="374.775" stroke="url(#paint0_linear_1106_91)"
            stroke-width="200" />
        <defs>
            <linearGradient id="paint0_linear_1106_91" x1="572.332" y1="-121.159" x2="-343.585" y2="416.107"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="green" stop-opacity="0.4" />
                <stop offset="1" stop-color="green" stop-opacity="0.4" />
            </linearGradient>
        </defs>
    </svg>

    <div class="container py-5">
        <div class="bg-primary my-5" style=" border-radius: 12px;">
            <h1 class="text-center py-5 font-weight-bold text-xl">17 Tujuan SDGs</h1>
        </div>
        <div class="text-center">
            <div class="row d-none d-md-flex">
                @foreach ($tujuans as $tujuan)
                    <div class="col-md-3 mb-4 card-tujuan">
                        <a href="/tujuan/{{ $tujuan->id }}">
                            <div class="card bg-white p-3"
                                style="min-height: 200px; max-height: 200px; border-radius: 12px;">
                                <div class="card-body d-flex justify-content-center align-items-center mb-3">
                                    <img src="{{ asset('assets/ikon/' . $tujuan->ikon_tujuan) }}" width="70"
                                        alt="">
                                </div>
                                <h4 class="card-title text-center">{{ $tujuan->nama_tujuan }}</h4>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row d-md-none">
                <div class="col-md-12">
                    <div id="tujuanCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($tujuans->chunk(2) as $chunk)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <div class="row">
                                        @foreach ($chunk as $tujuan)
                                            <div class="col-md-3 mb-4 card-tujuan" id="carousel">
                                                <a href="/tujuan/{{ $tujuan->id }}">
                                                    <div class="card bg-white p-3"
                                                        style="min-height: 200px; max-height: 200px">
                                                        <div
                                                            class="card-body d-flex justify-content-center align-items-center mb-3">
                                                            <img src="{{ asset('assets/ikon/' . $tujuan->ikon_tujuan) }}"
                                                                width="70" alt="">
                                                        </div>
                                                        <h4 class="card-title text-center">{{ $tujuan->nama_tujuan }}</h4>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#tujuanCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon bg-blue" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#tujuanCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon bg-blue" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <svg class="svg-bawah" width="476" height="476" viewBox="0 0 476 476" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <circle opacity="0.2" cx="475.274" cy="475.408" r="374.775" stroke="url(#paint0_linear_1106_91)"
            stroke-width="200" />
        <defs>
            <linearGradient id="paint0_linear_1106_91" x1="1016.42" y1="339.154" x2="100.5" y2="876.42"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="white" stop-opacity="0.4" />
                <stop offset="1" stop-color="white" stop-opacity="0.25" />
            </linearGradient>
        </defs>
    </svg>
@endsection

@section('script')

    <script>
        $(document).ready(function() {
            $('#tujuanCarousel').carousel({
                interval: 5000 // Mengatur waktu interval pada carousel
            });
        });
    </script>

@endsection
