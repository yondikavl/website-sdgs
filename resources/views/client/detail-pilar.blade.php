@extends('layouts.client.app')

@section('title', 'Detail Pilar')

@section('content')
<div class="text-center">
    <h1>Detail Pilar</h1>
    <img src="{{ asset('assets/ikon/'. $pilar->ikon_pilar) }}" width="180" alt="">
    <h2>{{$pilar->nama_pilar}}</h2>
    <p>{{$pilar->deskripsi_pilar}}</p>
</div>
<div>
    @foreach ($indikators->where('pilar_id', $pilar->id) as $indikator)
    <a href="/indikator/{{$indikator->id}}">
        <img src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" width="185" alt="">
    </a>
    @endforeach
</div>
@endsection