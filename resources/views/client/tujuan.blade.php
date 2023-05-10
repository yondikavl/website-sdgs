@extends('layouts.client.app')

@section('title', 'Tujuan')

@section('content')
<h1>17 Indikator SDGs</h1>
<div class="text-center">
    @foreach ($indikators as $indikator)
        <a href="/indikator/{{$indikator->id}}">
            <img src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" width="185" alt="">
        </a>
    @endforeach
    <img src="{{ asset('assets/img/logo-sdgs.png') }}" width="185" alt="">
</div>
@endsection