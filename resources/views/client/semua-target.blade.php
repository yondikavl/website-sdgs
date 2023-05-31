@extends('layouts.client.app')

@section('title', 'Target')

@section('content')
@php
$indikators= null;
$iteration = 0;
@endphp
<div class="text-left mb-4">
    <a href="/target" class="btn btn-sm btn-success"><i class="fas fa-arrow-left"></i></a>
</div>
<h1 class="text-center">Semua Target SGDs Kota Bandar Lampung</h1>
<div class="text-center">
    <div class="row">
        @foreach ($subindikators as $subindikator)
        @php
        $indikator_id = $subindikator->indikator_id;
        $namaSub = $subindikator->nama_sub;

        if ($indikator_id != $indikators) {
            $indikators = $indikator_id;
            $iteration = 1;
        } else {
            $iteration++;
        }
        @endphp
        <div class="col-md-3 mb-4">
            <a href="/subindikator/{{$subindikator->id}}">
                <div class="card bg-white">
                    <div class="card-body d-flex justify-content-center align-items-center" style="height: 100px">
                        <img src="{{ asset('assets/ikon/default.png') }}" width="70" alt="">
                    </div>
                    <h4 class="card-title text-center m-3">{{ $indikators }}.{{ $iteration }}. {{$subindikator->nama_sub}}</h4>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection