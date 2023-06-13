@extends('layouts.client.app')

@section('title', 'Detail pencapaian')

@section('content')
<div class="text-center">
    <h1>Detail pencapaian</h1>
    <img src="{{ asset('assets/img/pencapaian/'. $pencapaian->ikon_pencapaian) }}" width="180" alt="">
    <h2>{{$pencapaian->nama_pencapaian}}</h2>
    <p>{{$pencapaian->deskripsi_pencapaian}}</p>
</div>
@endsection