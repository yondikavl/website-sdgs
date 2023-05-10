@extends('layouts.client.app')

@section('title', 'Detail Aktivitas')

@section('content')
<div class="text-center">
    <h1>Detail Aktivitas</h1>
    <img src="{{ asset('assets/ikon/'. $aktivitas->ikon_aktivitas) }}" width="180" alt="">
    <h2>{{$aktivitas->nama_aktivitas}}</h2>
    <p>{{$aktivitas->deskripsi_aktivitas}}</p>
</div>
@endsection