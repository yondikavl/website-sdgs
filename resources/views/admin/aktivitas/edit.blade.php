@extends('layouts.admin.app')

@section('title', 'Edit pencapaian')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Edit pencapaian') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.pencapaian.update', $pencapaian->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.pencapaian.update', $pencapaian->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 3)
    <form method="POST" action="{{ route('opd.pencapaian.update', $pencapaian->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="text-center py-3 form-group">
            <label for="ikon_pencapaian" style="cursor: pointer">
              @if ($pencapaian->ikon_pencapaian == Null)
                  <i class="fa-solid fa-camera fa-2xl"></i>
                  <input type="file" class="visually-hidden" name="ikon_pencapaian" id="ikon_pencapaian" enabled>
                  @error('ikon_pencapaian')
                      <span class="invalid-feedback text-center" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              @else
                  <img src="{{ asset('assets/ikon') }}/{{ $pencapaian->ikon_pencapaian }}" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="">
                  <input type="file" class="visually-hidden" name="ikon_pencapaian" id="ikon_pencapaian" enabled>
                  @error('ikon_pencapaian')
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
              <option value="{{$pencapaian->subindikator_id}}">{{$pencapaian->subindikator_id}}</option>
            </select>  
              @error('subindikator_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="nama_pencapaian">{{ __('Nama pencapaian') }}</label>
            <input type="nama_pencapaian" class="form-control @error('nama_pencapaian') is-invalid @enderror" id="nama_pencapaian" value="{{$pencapaian->nama_pencapaian}}" name="nama_pencapaian" required autocomplete="nama_pencapaian" autofocus>
              @error('nama_pencapaian')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="deskripsi_pencapaian">{{ __('Deskripsi pencapaian') }}</label>
            <input type="deskripsi_pencapaian" class="form-control @error('deskripsi_pencapaian') is-invalid @enderror" id="deskripsi_pencapaian" value="{{$pencapaian->deskripsi_pencapaian}}" name="deskripsi_pencapaian" required autocomplete="current-deskripsi_pencapaian">
              @error('deskripsi_pencapaian')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="persentase">{{ __('Persentase Keberhasilan') }}</label>
            <div class="input-group" id="persentase">
              <input type="number" class="form-control @error('persentase') is-invalid @enderror" id="persentase" placeholder="Masukkan persentase pencapaian" name="persentase" required autocomplete="current-persentase" enabled>
              <div class="input-group-append" data-target="#persentase">
              <div class="input-group-text"><i class="far fa-percent"></i></div>
            </div>
            @error('persentase')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group">
            <label for="subindikator_id">{{ __('ID pencapaian Baru (jika ingin diganti)') }}</label>
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