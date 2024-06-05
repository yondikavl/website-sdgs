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
    <form method="POST" action="{{ route('super.indikator.show', $alamat->id) }}">
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.indikator.show', $alamat->id) }}">
    @elseif (auth()->user()->roles_id == 3)
    <form method="POST" action="{{ route('opd.indikator.show', $alamat->id) }}">
    @endif
        @csrf
      <div class="card-body">
        <div class="form-group">
        <div class="form-group">
          <label for="nama_kelurahan">{{ __('Nama Alamat') }}</label>
          <input type="nama_kelurahan" class="form-control @error('nama_kelurahan') is-invalid @enderror" id="nama_kelurahan" value="{{$alamat->nama_kelurahan}}" name="nama_kelurahan" disabled>
            @error('nama_kelurahan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="long">{{ __('Longitude') }}</label>
            <input type="long" class="form-control @error('long') is-invalid @enderror" id="long" value="{{$alamat->long}}" name="long" disabled>
              @error('long')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="lat">{{ __('Latitude') }}</label>
            <input type="lat" class="form-control @error('lat') is-invalid @enderror" id="lat" value="{{$alamat->lat}}" name="lat" disabled>
              @error('lat')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        <div class="">
          @if (auth()->user()->roles_id == 1)
            <a class="btn btn-success" href="/super/alamat/">{{ __('Kembali') }}</a>
          @elseif (auth()->user()->roles_id == 2)
            <a class="btn btn-success" href="/admin/alamat/">{{ __('Kembali') }}</a>
          @elseif (auth()->user()->roles_id == 3)
            <a class="btn btn-success" href="/opd/alamat/">{{ __('Kembali') }}</a>
          @endif
        </div>
      </div>
      <!-- /.card-body -->
    </form>
  </div>
@endsection
