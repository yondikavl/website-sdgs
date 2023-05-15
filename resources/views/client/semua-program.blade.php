@extends('layouts.client.app')

@section('title', 'Program')

@section('content')
<div class="text-left mb-4">
    <a href="/program" class="btn btn-sm btn-success"><i class="fas fa-arrow-left"></i></a>
</div>
<h1 class="text-center">Semua Program SGDs Kota Bandar Lampung</h1>
<div class="text-center">
    <div class="row">
        @foreach ($aktivitass as $aktivitas)
        <div class="col-md-3 mb-4">
            <a href="/aktivitas/{{$aktivitas->id}}">
                <div class="card bg-white">
                    <div class="card-body d-flex justify-content-center align-items-center mb-3" style="height: 100px">
                        <img src="{{ asset('assets/img/aktivitas/'. $aktivitas->ikon_aktivitas) }}" width="70" alt="">
                    </div>
                    <h4 class="card-title text-center">{{$aktivitas->nama_aktivitas}}</h4>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection