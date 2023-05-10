@extends('layouts.admin.app')

@section('title', 'Edit Aktivitas')

@section('content')
<div class="card card-success m-2" style="width: 500px;">
    <div class="card-header">
      <h3 class="card-title">{{ __('Edit Aktivitas') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.aktivitas.update', $aktivitas->id) }}">
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.aktivitas.update', $aktivitas->id) }}">
    @endif
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="subindikator_id">{{ __('ID Sub-Indikator Sekarang') }}</label>
            <select class="form-control col-form-label rounded-2" name="subindikator_id" id="subindikator_id" required>
              <option value="{{$aktivitas->subindikator_id}}">{{$aktivitas->subindikator_id}}</option>
            </select>  
              @error('subindikator_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="nama_aktivitas">{{ __('Nama Aktivitas') }}</label>
            <input type="nama_aktivitas" class="form-control @error('nama_aktivitas') is-invalid @enderror" id="nama_aktivitas" value="{{$aktivitas->nama_aktivitas}}" name="nama_aktivitas" required autocomplete="nama_aktivitas" autofocus>
              @error('nama_aktivitas')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="deskripsi_aktivitas">{{ __('Deskripsi Aktivitas') }}</label>
            <input type="deskripsi_aktivitas" class="form-control @error('deskripsi_aktivitas') is-invalid @enderror" id="deskripsi_aktivitas" value="{{$aktivitas->deskripsi_aktivitas}}" name="deskripsi_aktivitas" required autocomplete="current-deskripsi_aktivitas">
              @error('deskripsi_aktivitas')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="subindikator_id">{{ __('ID Aktivitas Baru (jika ingin diganti)') }}</label>
            <select class="form-control col-form-label rounded-2" name="subindikator_id" id="subindikator_id" required>
              @foreach ($subindikators as $subindikator)
              <option value="{{$subindikator->id}}">{{$subindikator->id}}. {{$subindikator->nama_sub}}</option>
              @endforeach
            </select>  
              @error('subindikator_id')
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