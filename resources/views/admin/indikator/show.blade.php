@extends('layouts.admin.app')

@section('title', 'Detail Indikator')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Detail Indikator') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.indikator.show', $indikator->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.indikator.show', $indikator->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 3)
    <form method="POST" action="{{ route('opd.indikator.show', $indikator->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
      <div class="card-body">
        <div class="text-center py-3 form-group">
          <label for="ikon_indikator" style="cursor: pointer">
            @if ($indikator->ikon_indikator == Null)
                <i class="fa-solid fa-camera fa-2xl"></i>
                <input type="file" class="visually-hidden" name="ikon_indikator" id="ikon_indikator" disabled>
                @error('ikon_indikator')
                    <span class="invalid-feedback text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            @else
                <img src="{{ asset('assets/ikon') }}/{{ $indikator->ikon_indikator }}" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="">
                <input type="file" class="visually-hidden" name="ikon_indikator" id="ikon_indikator" disabled>
                @error('ikon_indikator')
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
            <option value="{{$indikator->pilar_id}}">{{$indikator->pilar_id}}</option>
          </select>  
            @error('pilar_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="nama_indikator">{{ __('Nama Indikator') }}</label>
          <input type="nama_indikator" class="form-control @error('nama_indikator') is-invalid @enderror" id="nama_indikator" value="{{$indikator->nama_indikator}}" name="nama_indikator" disabled>
            @error('nama_indikator')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi_indikator">{{ __('Deskripsi Indikator') }}</label>
          <input type="deskripsi_indikator" class="form-control @error('deskripsi_indikator') is-invalid @enderror" id="deskripsi_indikator" value="{{$indikator->deskripsi_indikator}}" name="deskripsi_indikator" disabled>
            @error('deskripsi_indikator')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="">
          @if (auth()->user()->roles_id == 1)
            <a class="btn btn-success" href="/super/indikator/">{{ __('Kembali') }}</a>
          @elseif (auth()->user()->roles_id == 2)  
            <a class="btn btn-success" href="/admin/indikator/">{{ __('Kembali') }}</a>
          @endif
        </div>
      </div>
      <!-- /.card-body -->      
    </form>
  </div>
@endsection