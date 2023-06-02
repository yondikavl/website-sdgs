@extends('layouts.client.app')

@section('title', 'Program')

@section('content')
<h1 class="text-center">Program SGDs Kota Bandar Lampung</h1>
<div class="text-right my-4">
    <a href="/semua-program" class="btn btn-sm btn-success">Lihat Semua Program <i class="fas fa-arrow-right"></i></a>
</div>
<div class="container">
    <h2>Program Terbaru</h2>
    <div class="row">
        <div class="col-md-12 d-none d-md-block">
            <div class="row">
                @foreach ($aktivitass->take(3-6) as $aktivitas)
                <div class="col-md-4 mb-4">
                    <a href="/aktivitas/{{$aktivitas->id}}">
                        <div class="card bg-white">
                            <div class="card-body d-flex justify-content-center align-items-center mb-3" style="height: 100px">
                                <img src="{{ asset('assets/img/aktivitas/'. $aktivitas->ikon_aktivitas) }}" width="70" alt="">
                            </div>
                            <h4 class="card-title text-center">{{ substr($aktivitas->nama_aktivitas, 0, 20) }}...</h4>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-12 d-md-none">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach ($aktivitass->take(3) as $key => $aktivitas)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <a href="/aktivitas/{{$aktivitas->id}}">
                                    <div class="card bg-white">
                                        <div class="card-body d-flex justify-content-center align-items-center mb-3" style="height: 100px">
                                            <img src="{{ asset('assets/img/aktivitas/'. $aktivitas->ikon_aktivitas) }}" width="70" alt="">
                                        </div>
                                        <h4 class="card-title text-center">{{ substr($aktivitas->nama_aktivitas, 0, 20) }}...</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h2>Program Lainnya</h2>
    <div class="row">
        <div class="col-md-12 d-none d-md-block">
            <div class="row">
                @foreach ($aktivitass->take(3) as $aktivitas)
                <div class="col-md-4 mb-4">
                    <a href="/aktivitas/{{$aktivitas->id}}">
                        <div class="card bg-white">
                            <div class="card-body d-flex justify-content-center align-items-center mb-3" style="height: 100px">
                                <img src="{{ asset('assets/img/aktivitas/'. $aktivitas->ikon_aktivitas) }}" width="70" alt="">
                            </div>
                            <h4 class="card-title text-center">{{ substr($aktivitas->nama_aktivitas, 0, 20) }}...</h4>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-12 d-md-none">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    @foreach ($aktivitass->take(3) as $key => $aktivitas)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <div class="row">
                            <div class="col-12 mb-4">
                                <a href="/aktivitas/{{$aktivitas->id}}">
                                    <div class="card bg-white">
                                        <div class="card-body d-flex justify-content-center align-items-center mb-3" style="height: 100px">
                                            <img src="{{ asset('assets/img/aktivitas/'. $aktivitas->ikon_aktivitas) }}" width="70" alt="">
                                        </div>
                                        <h4 class="card-title text-center">{{ substr($aktivitas->nama_aktivitas, 0, 20) }}...</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection