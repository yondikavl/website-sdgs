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
    <form method="POST" action="{{ route('super.indikator.show', $indikator->id) }}">
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.indikator.show', $indikator->id) }}">
    @elseif (auth()->user()->roles_id == 3)
    <form method="POST" action="{{ route('opd.indikator.show', $indikator->id) }}">
    @endif
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="indikator_id">{{ __('ID Indikator') }}</label>
          <select class="form-control col-form-label rounded-2" name="tujuan_id" id="tujuan_id" disabled>
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
          <input type="kode_indikator" class="form-control @error('kode_indikator') is-invalid @enderror" id="kode_indikator" value="{{$indikator->kode_indikator}}" name="kode_indikator" disabled>
            @error('kode_indikator')
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
        <div class="form-group col-4">
          <label for="tipe">{{ __('Jenis') }}</label>
          <input type="tipe" class="form-control @error('tipe') is-invalid @enderror" id="tipe" value="{{$indikator->tipe}}" name="tipe" disabled autocomplete="tipe" autofocus>
            @error('tipe')
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
          @elseif (auth()->user()->roles_id == 3)
            <a class="btn btn-success" href="/opd/indikator/">{{ __('Kembali') }}</a>
          @endif
        </div>
      </div>
      <!-- /.card-body -->
    </form>
  </div>
@endsection
