@extends('layouts.admin.app')

@section('title', 'Detail Tujuan')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Detail Tujuan') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.tujuan.show', $tujuan->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.tujuan.show', $tujuan->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 3)
    <form method="POST" action="{{ route('opd.tujuan.show', $tujuan->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
      <div class="card-body">
        <div class="text-center py-3 form-group">
          <label for="ikon_tujuan" style="cursor: pointer">
            @if ($tujuan->ikon_tujuan == Null)
                <i class="fa-solid fa-camera fa-2xl"></i>
                <input type="file" class="visually-hidden" name="ikon_tujuan" id="ikon_tujuan" disabled>
                @error('ikon_tujuan')
                    <span class="invalid-feedback text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            @else
                <img src="{{ asset('assets/ikon') }}/{{ $tujuan->ikon_tujuan }}" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="">
                <input type="file" class="visually-hidden" name="ikon_tujuan" id="ikon_tujuan" disabled>
                @error('ikon_tujuan')
                    <span class="invalid-feedback text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            @endif
          </label>
        </div>
        <div class="form-group">
          <label for="pilar_id">{{ __('ID Pilar') }}</label>
          <select class="form-control col-form-label rounded-2" name="pilar_id" id="pilar_id" disabled>
            <option value="{{$tujuan->pilar_id}}">{{$tujuan->pilar_id}}</option>
          </select>  
            @error('pilar_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="nama_tujuan">{{ __('Nama tujuan') }}</label>
          <input type="nama_tujuan" class="form-control @error('nama_tujuan') is-invalid @enderror" id="nama_tujuan" value="{{$tujuan->nama_tujuan}}" name="nama_tujuan" disabled>
            @error('nama_tujuan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi_tujuan">{{ __('Deskripsi tujuan') }}</label>
          <input type="deskripsi_tujuan" class="form-control @error('deskripsi_tujuan') is-invalid @enderror" id="deskripsi_tujuan" value="{{$tujuan->deskripsi_tujuan}}" name="deskripsi_tujuan" disabled>
            @error('deskripsi_tujuan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="">
          @if (auth()->user()->roles_id == 1)
            <a class="btn btn-success" href="/super/tujuan/">{{ __('Kembali') }}</a>
          @elseif (auth()->user()->roles_id == 2)  
            <a class="btn btn-success" href="/admin/tujuan/">{{ __('Kembali') }}</a>
          @endif
        </div>
      </div>
      <!-- /.card-body -->      
    </form>
  </div>
@endsection