@extends('layouts.client.app')

@section('title', 'Target')

@section('content')
<div class="text-left mb-4">
    <a href="/target" class="btn btn-sm btn-success"><i class="fas fa-arrow-left"></i></a>
</div>
<h1 class="text-center">Semua Target SGDs Kota Bandar Lampung</h1>
<div class="text-center">
    <div class="row">
        @foreach ($subindikators as $subindikator)
        <div class="col-md-3 mb-4">
            <a href="/subindikator/{{$subindikator->id}}">
                <div class="card bg-white">
                    <div class="card-body d-flex justify-content-center align-items-center" style="height: 100px">
                        <img src="{{ asset('assets/ikon/default.png') }}" width="70" alt="">
                    </div>
                    <h4 class="card-title text-center m-3">{{ $subindikator->kode_sub}} {{ substr($subindikator->nama_sub, 0, 20) }}...</h4>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection