@extends('layouts.client.app')

@section('title', 'Detail Pilar')

@section('content')
@if ($pilar->id == 1)
<div class="text-center">
    <h1>Detail Pilar</h1>
    <img class="bg-danger rounded-circle" src="{{ asset('assets/ikon/'. $pilar->ikon_pilar) }}" width="180" alt="">
    <h2>{{$pilar->nama_pilar}}</h2>
    <p>{{$pilar->deskripsi_pilar}}</p>
</div>
@elseif ($pilar->id == 2)
<div class="text-center">
    <h1>Detail Pilar</h1>
    <img class="bg-warning rounded-circle" src="{{ asset('assets/ikon/'. $pilar->ikon_pilar) }}" width="180" alt="">
    <h2>{{$pilar->nama_pilar}}</h2>
    <p>{{$pilar->deskripsi_pilar}}</p>
</div>
@elseif ($pilar->id == 3)
<div class="text-center">
    <h1>Detail Pilar</h1>
    <img class="bg-success rounded-circle" src="{{ asset('assets/ikon/'. $pilar->ikon_pilar) }}" width="180" alt="">
    <h2>{{$pilar->nama_pilar}}</h2>
    <p>{{$pilar->deskripsi_pilar}}</p>
</div>
@elseif ($pilar->id == 4)
<div class="text-center">
    <h1>Detail Pilar</h1>
    <img class="bg-primary rounded-circle" src="{{ asset('assets/ikon/'. $pilar->ikon_pilar) }}" width="180" alt="">
    <h2>{{$pilar->nama_pilar}}</h2>
    <p>{{$pilar->deskripsi_pilar}}</p>
</div>
@endif
<div class="text-center">
    @foreach ($indikators->where('pilar_id', $pilar->id) as $indikator)
    <a href="/indikator/{{$indikator->id}}">
        <img src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" width="185" alt="">
    </a>
    @endforeach
</div>
@endsection