@extends('layouts.client.app')

@section('title', 'Detail Indikator')

@section('content')
<div class="text-center">
    <h1>Detail Indikator</h1>
    <img src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" width="180" alt="">
    <h2>{{$indikator->nama_indikator}}</h2>
    <p>{{$indikator->deskripsi_indikator}}</p>
</div>
<div class="text-center">
    @foreach ($subindikators->where('indikator_id', $indikator->id) as $subindikator)
    <a href="/subindikator/{{$subindikator->id}}">
        <img src="{{ asset('assets/ikon/'. $subindikator->ikon_sub) }}" width="185" alt="">
    </a>
    @endforeach
</div>
@endsection