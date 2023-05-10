@extends('layouts.client.app')

@section('title', 'Beranda')

@section('content')
<div>
    <div class="">
        <h1>SDGs Kota Bandar Lampung</h1>
        <p>
            Kota Bandar Lampung telah berkomitmen untuk mencapai Sustainable Development Goals (SDGs) atau Tujuan Pembangunan Berkelanjutan (TPB) yang ditunjukkan dengan telah disusun dan ditetapkannya dokumen Rencana Aksi Daerah (RAD) SDGs/TPB Kota Bandar Lampung 2020-2024. Ini selaras dengan dokumen RAD SDGs/TPB Provinsi Lampung yang telah ditetapkan oleh Pemerintah Provinsi Lampung. Komitmen dalam perencanaan pembangunan Kota Bandar Lampung pun ditunjukkan dengan telah diselaraskannya dokumen Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Kota Bandar Lampung 2021-2026 dengan tujuan dan target dalam SDGs. Begitu juga dengan dokumen Rencana Kerja Pemerintah Daerah (RKPD) Kota Bandar Lampung yang merupakan penjabaran RPJMD untuk jangka waktu 1 (satu) tahun.
        </p>
    </div>
    <div class="">
        @foreach ($indikators as $indikator)
            <a href="/indikator/{{$indikator->id}}">
                <img src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" width="180" alt="">
            </a>
        @endforeach
    </div>
</div>
@endsection