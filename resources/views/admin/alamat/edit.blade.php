@extends('layouts.admin.app')

@section('title', 'Edit alamat')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Edit alamat') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.alamat.update', $alamat->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.alamat.update', $alamat->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 3)
    <form method="POST" action="{{ route('opd.alamat.update', $alamat->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
            <label for="nama_kelurahan">{{ __('Nama kelurahan') }}</label>
            <input type="nama_kelurahan" class="form-control @error('nama_kelurahan') is-invalid @enderror" id="nama_kelurahan" value="{{$alamat->nama_kelurahan}}" name="nama_kelurahan" required autocomplete="nama_kelurahan" autofocus>
              @error('nama_kelurahan')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="long">{{ __('Longitude') }}</label>
            <input type="long" class="form-control @error('long') is-invalid @enderror" id="long" value="{{$alamat->long}}" name="long" required autocomplete="long" autofocus>
              @error('long')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="lat">{{ __('Latitude') }}</label>
            <input type="lat" class="form-control @error('lat') is-invalid @enderror" id="lat" value="{{$alamat->lat}}" name="lat" required autocomplete="lat" autofocus>
              @error('lat')
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
