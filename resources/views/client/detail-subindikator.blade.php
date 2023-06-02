@extends('layouts.client.app')

@section('title', 'Detail Sub-Indikator')

@section('content')
<div class="text-center">
    <h1>Detail Sub-Indikator</h1>
    <img src="{{ asset('assets/ikon/default.png') }}" width="180" alt="">
    <h2>{{$subindikator->nama_sub}}</h2>
    <p>{{$subindikator->deskripsi_sub}}</p>
</div>
<div class="text-center">
    @foreach ($aktivitass->where('subindikator_id', $subindikator->id) as $aktivitas)
    <a href="/aktivitas/{{$aktivitas->id}}">
        <img src="{{ asset('assets/img/aktivitas/'. $aktivitas->ikon_aktivitas) }}" width="185" alt="">
    </a>
    @endforeach
</div>
@endsection