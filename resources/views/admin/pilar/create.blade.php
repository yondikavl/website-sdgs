@extends('layouts.admin.app')

@section('title', 'Tambah Pilar')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Tambah Pilar') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.pilar.store') }}" enctype='multipart/form-data'>
    @endif
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="ikon_pilar">{{ __('Ikon Pilar') }}</label>
          <input type="file" class="form-control @error('ikon_pilar') is-invalid @enderror" id="ikon_pilar" placeholder="Masukkan ikon pilar" value="{{ old('ikon_pilar') }}" name="ikon_pilar" required autocomplete="ikon_pilar" autofocus>
            @error('ikon_pilar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="nama_pilar">{{ __('Nama Pilar') }}</label>
          <input type="nama_pilar" class="form-control @error('nama_pilar') is-invalid @enderror" id="nama_pilar" placeholder="Masukkan nama pilar" value="{{ old('nama_pilar') }}" name="nama_pilar" required autocomplete="nama_pilar" autofocus>
            @error('nama_pilar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi_pilar">{{ __('Deskripsi Pilar') }}</label>
          <input type="deskripsi_pilar" class="form-control @error('deskripsi_pilar') is-invalid @enderror" id="deskripsi_pilar" placeholder="Masukkan deskripsi pilar" name="deskripsi_pilar" required autocomplete="current-deskripsi_pilar">
            @error('deskripsi_pilar')
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