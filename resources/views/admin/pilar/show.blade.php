@extends('layouts.admin.app')

@section('title', 'Detail Pilar')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Detail Pilar') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.pilar.show', $pilar->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.pilar.show', $pilar->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 3)
    <form method="POST" action="{{ route('opd.pilar.show', $pilar->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
      <div class="card-body">
        <div class="text-center py-3 form-group">
          <label for="ikon_pilar" style="cursor: pointer">
            @if ($pilar->ikon_pilar == Null)
                <i class="fa-solid fa-camera fa-2xl"></i>
                <input type="file" class="visually-hidden" name="ikon_pilar" id="ikon_pilar" disabled>
                @error('ikon_pilar')
                    <span class="invalid-feedback text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            @else
                <img src="{{ asset('assets/ikon') }}/{{ $pilar->ikon_pilar }}" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="">
                <input type="file" class="visually-hidden" name="ikon_pilar" id="ikon_pilar" disabled>
                @error('ikon_pilar')
                    <span class="invalid-feedback text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            @endif
          </label>
        </div>
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