@extends('layouts.admin.app')

@section('title', 'Detail Pilar')

@section('content')
<div class="card card-success m-2" style="width: 500px;">
    <div class="card-header">
      <h3 class="card-title">{{ __('Detail Pilar') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.pilar.show', $pilar->id) }}">
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.pilar.show', $pilar->id) }}">
    @endif
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="nama_pilar">{{ __('Nama Pilar') }}</label>
          <input type="nama_pilar" class="form-control @error('nama_pilar') is-invalid @enderror" id="nama_pilar" value="{{$pilar->nama_pilar}}" name="nama_pilar" disabled>
            @error('nama_pilar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi_pilar">{{ __('Deskripsi Pilar') }}</label>
          <input type="deskripsi_pilar" class="form-control @error('deskripsi_pilar') is-invalid @enderror" id="deskripsi_pilar" value="{{$pilar->deskripsi_pilar}}" name="deskripsi_pilar" disabled>
            @error('deskripsi_pilar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="">
          @if (auth()->user()->roles_id == 1)
            <a class="btn btn-success" href="/super/pilar/">{{ __('Kembali') }}</a>
          @elseif (auth()->user()->roles_id == 2)  
            <a class="btn btn-success" href="/admin/pilar/">{{ __('Kembali') }}</a>
          @endif
        </div>
      </div>
      <!-- /.card-body -->      
    </form>
  </div>
@endsection