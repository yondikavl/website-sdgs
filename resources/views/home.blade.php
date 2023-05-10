@extends('layouts.client.app')

@section('title', 'Beranda')

@section('content')
<div>
    <div class="w-75">
        <h1>SDGs Kota Bandar Lampung</h1>
        <p class="font-weight-light text-lg-left">
            Kota Bandar Lampung telah berkomitmen untuk mencapai Sustainable Development Goals (SDGs) atau Tujuan Pembangunan Berkelanjutan (TPB) yang ditunjukkan dengan telah disusun dan ditetapkannya dokumen Rencana Aksi Daerah (RAD) SDGs/TPB Kota Bandar Lampung 2020-2024. Ini selaras dengan dokumen RAD SDGs/TPB Provinsi Lampung yang telah ditetapkan oleh Pemerintah Provinsi Lampung. Komitmen dalam perencanaan pembangunan Kota Bandar Lampung pun ditunjukkan dengan telah diselaraskannya dokumen Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Kota Bandar Lampung 2021-2026 dengan tujuan dan target dalam SDGs. Begitu juga dengan dokumen Rencana Kerja Pemerintah Daerah (RKPD) Kota Bandar Lampung yang merupakan penjabaran RPJMD untuk jangka waktu 1 (satu) tahun.
        </p>
    </div>
</div>
    <div class="w-100 p-5 bg-gradient-success mb-3">
        <div class="col-sm-12 d-flex flex-row w-50">
            @foreach ($pilars as $pilar)
                <a class="card col-sm-6 bg-gradient-success w-100 text-white p-4" href="/pilar/{{$pilar->id}}">
                    <h3>{{$pilar->nama_pilar}}</h3>
                    <p>{{$pilar->deskripsi_pilar}}</p>
                </a>
            @endforeach
        </div>
    </div>
    <div class="text-center">
        @foreach ($indikators as $indikator)
            <a href="/indikator/{{$indikator->id}}">
                <img src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" width="185" alt="">
            </a>
        @endforeach
        <img src="{{ asset('assets/img/logo-sdgs.png') }}" width="185" alt="">
    </div>
@endsection