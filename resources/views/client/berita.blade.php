@extends('layouts.client.app')

@section('title', 'Berita')

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

    <div class="container pt-5">
        <div class="bg-primary my-5" style=" border-radius: 12px;">
            <h1 class="text-center py-5 font-weight-bold text-xl">Berita SDGs Kota Bandar Lampung</h1>
        </div>
        <div class="d-flex flex-wrap">
            <a href="/detail-berita" class="col-md-4">
                <div class="card mb-4">
                    <div class="card-img-top-container" style="position: relative; width: 100%; padding-bottom: 75%;">
                        <img src="./assets/img/booklet.png" class="card-img-top p-2" alt="Blog Image 1"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; border-radius: 12px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Judul Berita 1</h5>
                        <p class="card-text text-truncate"
                            style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                            Konten berita 1 ini hanya contoh untuk menampilkan bagaimana tampilan jika konten ini
                            terlalu panjang.
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Diposting pada 11:11 WIB - 11/08/2024 oleh Author 1</small>
                        </p>
                    </div>
                </div>
            </a>

            <a href="/detail-berita" class="col-md-4">
                <div class="card mb-4">
                    <div class="card-img-top-container" style="position: relative; width: 100%; padding-bottom: 75%;">
                        <img src="./assets/img/booklet.png" class="card-img-top p-2" alt="Blog Image 2"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; border-radius: 12px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Judul Berita 2</h5>
                        <p class="card-text text-truncate"
                            style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                            Konten berita 2 ini hanya contoh untuk menampilkan bagaimana tampilan jika konten ini
                            terlalu panjang.
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Diposting pada 11:11 WIB - 10/08/2024 oleh Author 2</small>
                        </p>
                    </div>
                </div>
            </a>

            <a href="/detail-berita" class="col-md-4">
                <div class="card mb-4">
                    <div class="card-img-top-container" style="position: relative; width: 100%; padding-bottom: 75%;">
                        <img src="./assets/img/booklet.png" class="card-img-top p-2" alt="Blog Image 3"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; border-radius: 12px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Judul Berita 3</h5>
                        <p class="card-text text-truncate"
                            style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                            Konten berita 3 ini hanya contoh untuk menampilkan bagaimana tampilan jika konten ini
                            terlalu panjang.
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Diposting pada 11:11 WIB - 09/08/2024 oleh Author 3</small>
                        </p>
                    </div>
                </div>
            </a>

            <a href="/detail-berita" class="col-md-4">
                <div class="card mb-4">
                    <div class="card-img-top-container" style="position: relative; width: 100%; padding-bottom: 75%;">
                        <img src="./assets/img/booklet.png" class="card-img-top p-2" alt="Blog Image 3"
                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; border-radius: 12px;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">Judul Berita 3</h5>
                        <p class="card-text text-truncate"
                            style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                            Konten berita 3 ini hanya contoh untuk menampilkan bagaimana tampilan jika konten ini
                            terlalu panjang.
                        </p>
                        <p class="card-text">
                            <small class="text-muted">Diposting pada 11:11 WIB - 09/08/2024 oleh Author 3</small>
                        </p>
                    </div>
                </div>
            </a>
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
