@extends('layouts.client.app')

@section('title', 'Target')

@section('content')
<h1 class="text-center">Target SGDs Kota Bandar Lampung</h1>
<div class="text-center">
    <div class="row">
        @foreach ($subindikators as $subindikator)
        <div class="col-md-3 mb-4">
            <a href="/subindikator/{{$subindikator->id}}">
                <div class="card bg-white">
                    <div class="card-body d-flex justify-content-center align-items-center mb-3" style="height: 100px">
                        <img src="{{ asset('assets/ikon/'. $subindikator->ikon_sub) }}" width="70" alt="">
                    </div>
                    <h4 class="card-title text-center">{{$subindikator->nama_sub}}</h4>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection