@extends('layouts.admin.app')

@section('title', 'Edit Indikator')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Edit Indikator') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.indikator.update', $indikator->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.indikator.update', $indikator->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 3)
    <form method="POST" action="{{ route('opd.indikator.update', $indikator->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="indikator_id">{{ __('ID Indikator Sekarang') }}</label>
          <select class="form-control col-form-label rounded-2" name="tujuan_id" id="tujuan_id" required>
            <option value="{{$indikator->tujuan_id}}">{{$indikator->tujuan_id}}</option>
          </select>
            @error('indikator_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="kode_indikator">{{ __('Kode Indikator') }}</label>
          <input type="kode_indikator" class="form-control @error('kode_indikator') is-invalid @enderror" id="kode_indikator" value="{{$indikator->kode_indikator}}" name="kode_indikator" required autocomplete="kode_indikator" autofocus>
            @error('kode_indikator')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="nama_indikator">{{ __('Nama Indikator') }}</label>
          <input type="nama_indikator" class="form-control @error('nama_indikator') is-invalid @enderror" id="nama_indikator" value="{{$indikator->nama_indikator}}" name="nama_indikator" required autocomplete="nama_indikator" autofocus>
            @error('nama_indikator')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="indikator_id">{{ __('ID Indikator Baru (jika ingin diganti)') }}</label>
          <select class="form-control col-form-label rounded-2" name="indikator_id" id="indikator_id" required>
            @foreach ($indikators as $indikator)
            <option value="{{$indikator->id}}">{{$indikator->id}}. {{$indikator->nama_indikator}}</option>
            @endforeach
          </select>
            @error('indikator_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="">
            <button type="submit" class="btn btn-success">{{ __('Simpan') }}</</button>
          </div>
      </div>
      <!-- /.card-body -->
    </form>
  </div>
@endsection
