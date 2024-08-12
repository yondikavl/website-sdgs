@extends('layouts.client.app')

@section('title', 'Detail Berita')

@section('style')
    <style>
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
    </style>
@endsection

@section('content')

@if (!is_null($berita))
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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div id="blogCarousel" class="carousel slide my-5" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach (explode(',', $berita->gambar_berita) as $image)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img src="{{ asset('assets/img/' . $image) }}" class="d-block w-100" alt="Slide"
                                style="max-height: 500px; object-fit: cover; border-radius: 12px;">
                        </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="card shadow-sm p-4" style="border-radius: 12px;">
                    <h1 class="my-3 text-justify">{!! nl2br(preg_replace('/\s+/', ' ', trim($berita->judul_berita))) !!}</h1>
                    <div class="mb-5">
                        <span class="text-muted">Diposting pada {{ $berita->created_at->format('H:i') }} WIB - {{ $berita->created_at->format('d/m/Y') }} oleh Admin</span>
                    </div>

                    <div class="content mb-3 text-justify">
                        <p>{!! nl2br($berita->konten_berita) !!}</p>
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

@else
    <section class="error">
        <div class="sm:max-w-[807px] mb-24 mx-auto">
            <div class="ssm:mt-[48px] lg:mt-[150px] h-full">
                <div class="text-center">
                    <h2 class="text-[24px] font-bold md:text-[30px] lg:text-[48px] font-roboto">Berita Tidak Ditemukan!</h2>
                    <p class="text-[12px] md:text-[18px] lg:text-[24px] font-OpenSans">Berita yang anda cari tidak ada, silahkan lapor jika hal ini merupakan kekeliruan.</p>
                </div>
            </div>
        </div>
    </section>
@endif

@endsection
