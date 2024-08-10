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
          <label for="tujuan_id">{{ __('ID Tujuan') }}</label>
          <select class="form-control col-form-label rounded-2" name="tujuan_id" id="tujuan_id" required>
            <option value="">-- Pilih Indikator --</option>
            @foreach ($tujuans as $tujuan)
              <option value="{{$tujuan->id}}">{{$tujuan->id}}. {{$tujuan->nama_tujuan}}</option>
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
          <input type="kode_indikator" class="form-control @error('kode_indikator') is-invalid @enderror" id="kode_indikator" placeholder="5.2.1" value="{{ old('kode_indikator') }}" name="kode_indikator" required autocomplete="kode_indikator" autofocus>
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
          <label for="rumus">{{ __('Gambar Rumus') }}</label>
          <input type="file" class="form-control @error('rumus') is-invalid @enderror" id="rumus" placeholder="Masukkan ikon tujuan" value="{{ old('rumus') }}" name="rumus" autocomplete="rumus" autofocus>
            @error('ikon_tujuan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi">{{ __('Deskripsi') }}</label>
          <input type="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukkan deskripsi" value="{{ old('deskripsi') }}" name="deskripsi" required autocomplete="deskripsi" autofocus>
            @error('deskripsi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="tipe">{{ __('Jenis Pencapaian') }}</label>
          <input type="tipe" class="form-control @error('tipe') is-invalid @enderror" id="tipe" placeholder="Masukkan jenis pencapaian" value="{{ old('tipe') }}" name="tipe" required autocomplete="tipe" autofocus>
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
