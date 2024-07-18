@extends('layouts.client.app')

@section('title', 'Tujuan')

@section('style')
    <style>
        #carousel:hover {
            filter: brightness(0.8);
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

    <div class="container py-5">
        <h1 class="text-center py-5 font-weight-bold text-xl">17 Tujuan SDGs</h1>
        <div class="text-center">
            <div class="row d-none d-md-flex">
                @foreach ($tujuans as $tujuan)
                    <div class="col-md-3 mb-4">
                        <a href="/tujuan/{{ $tujuan->id }}">
                            <div class="card bg-white p-3" style="min-height: 200px; max-height: 200px">
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
                                            <div class="col-md-3 mb-4" id="carousel">
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
