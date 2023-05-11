@extends('layouts.admin.app')

@section('title', 'Tambah Sub-Indikator')

@section('content')
<div class="card card-success m-2" style="width: 500px;">
    <div class="card-header">
      <h3 class="card-title">{{ __('Tambah Sub-Indikator') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.subindikator.store') }}">
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.subindikator.store') }}">
    @endif
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="ikon_sub">{{ __('Ikon Sub-Indikator') }}</label>
          <input type="file" class="form-control @error('ikon_sub') is-invalid @enderror" id="ikon_sub" placeholder="Masukkan ikon sub" value="{{ old('ikon_sub') }}" name="ikon_sub" required autocomplete="ikon_sub" autofocus>
            @error('ikon_sub')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="indikator_id">{{ __('ID Indikator') }}</label>
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
        <div class="form-group">
          <label for="nama_sub">{{ __('Nama Sub-Indikator') }}</label>
          <input type="nama_sub" class="form-control @error('nama_sub') is-invalid @enderror" id="nama_sub" placeholder="Masukkan nama subindikator" value="{{ old('nama_sub') }}" name="nama_sub" required autocomplete="nama_sub" autofocus>
            @error('nama_sub')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi_sub">{{ __('Deskripsi Sub-Indikator') }}</label>
          <input type="deskripsi_sub" class="form-control @error('deskripsi_sub') is-invalid @enderror" id="deskripsi_sub" placeholder="Masukkan deskripsi subindikator" name="deskripsi_sub" required autocomplete="current-deskripsi_sub">
            @error('deskripsi_sub')
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