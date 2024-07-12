@extends('layouts.admin.app')

@section('title', 'Tambah Indikator')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Tambah Indikator') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.indikator.store') }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.indikator.store') }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 3)
    <form method="POST" action="{{ route('opd.indikator.store') }}" enctype='multipart/form-data'>
    @endif
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="tujuan_id">{{ __('ID Indikator') }}</label>
          <select class="form-control col-form-label rounded-2" name="tujuan_id" id="tujuan_id" required>
            <option value="">-- Pilih Indikator --</option>
            @foreach ($indikators as $indikator)
              <option value="{{$indikator->tujuan_id}}">{{$indikator->tujuan_id}}. {{$indikator->nama_indikator}}</option>
            @endforeach
          </select>
            @error('tujuan_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="kode_indikator">{{ __('Kode Indikator') }}</label>
          <input type="kode_indikator" class="form-control @error('kode_indikator') is-invalid @enderror" id="kode_indikator" placeholder="Masukkan nama indikator" value="{{ old('kode_indikator') }}" name="kode_indikator" required autocomplete="kode_indikator" autofocus>
            @error('kode_indikator')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="nama_indikator">{{ __('Nama Indikator') }}</label>
          <input type="nama_indikator" class="form-control @error('nama_indikator') is-invalid @enderror" id="nama_indikator" placeholder="Masukkan nama indikator" value="{{ old('nama_indikator') }}" name="nama_indikator" required autocomplete="nama_indikator" autofocus>
            @error('nama_indikator')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="tipe">{{ __('Jenis Pencapaian') }}</label>
          <select class="form-control col-form-label rounded-2" name="tipe" id="tipe" required>
              <option value="%">Persen (%)</option>
              <option value="orang">Orang</option>
              <option value="jumlah">Jumlah</option>
          </select>
          @error('tipe')
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
