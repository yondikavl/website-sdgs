@extends('layouts.admin.app')

@section('title', 'Edit Aktivitas')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Edit Aktivitas') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.aktivitas.update', $aktivitas->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.aktivitas.update', $aktivitas->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="text-center py-3 form-group">
            <label for="ikon_aktivitas" style="cursor: pointer">
              @if ($aktivitas->ikon_aktivitas == Null)
                  <i class="fa-solid fa-camera fa-2xl"></i>
                  <input type="file" class="visually-hidden" name="ikon_aktivitas" id="ikon_aktivitas" enabled>
                  @error('ikon_aktivitas')
                      <span class="invalid-feedback text-center" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              @else
                  <img src="{{ asset('assets/ikon') }}/{{ $aktivitas->ikon_aktivitas }}" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="">
                  <input type="file" class="visually-hidden" name="ikon_aktivitas" id="ikon_aktivitas" enabled>
                  @error('ikon_aktivitas')
                      <span class="invalid-feedback text-center" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              @endif
            </label>
          </div>
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
            <label for="persentase">{{ __('Persentase') }}</label>
            <input type="number" class="form-control @error('persentase') is-invalid @enderror" id="persentase" value="{{$aktivitas->persentase}}" name="persentase" required autocomplete="current-persentase">
              @error('persentase')
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