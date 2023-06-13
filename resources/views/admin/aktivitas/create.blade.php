@extends('layouts.admin.app')

@section('title', 'Tambah pencapaian')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Tambah pencapaian') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.pencapaian.store') }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.pencapaian.store') }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 3)
    <form method="POST" action="{{ route('opd.pencapaian.store') }}" enctype='multipart/form-data'>
    @endif
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="ikon_pencapaian">{{ __('Ikon pencapaian') }}</label>
          <input type="file" class="form-control @error('ikon_pencapaian') is-invalid @enderror" id="ikon_pencapaian" name="ikon_pencapaian" required>
            @error('ikon_pencapaian')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="subindikator_id">{{ __('ID Sub-Indikator') }}</label>
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
        <div class="form-group">
          <label for="nama_pencapaian">{{ __('Nama pencapaian') }}</label>
          <input type="nama_pencapaian" class="form-control @error('nama_pencapaian') is-invalid @enderror" id="nama_pencapaian" placeholder="Masukkan nama pencapaian" value="{{ old('nama_pencapaian') }}" name="nama_pencapaian" required autocomplete="nama_pencapaian" autofocus>
            @error('nama_pencapaian')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi_pencapaian">{{ __('Deskripsi pencapaian') }}</label>
          <input type="deskripsi_pencapaian" class="form-control @error('deskripsi_pencapaian') is-invalid @enderror" id="deskripsi_pencapaian" placeholder="Masukkan deskripsi pencapaian" name="deskripsi_pencapaian" required autocomplete="current-deskripsi_pencapaian">
            @error('deskripsi_pencapaian')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="persentase">{{ __('Persentase Keberhasilan') }}</label>
          <div class="input-group" id="persentase">
            <input type="number" class="form-control @error('persentase') is-invalid @enderror" id="persentase" placeholder="Masukkan persentase pencapaian" name="persentase" required autocomplete="current-persentase">
            <div class="input-group-append" data-target="#persentase">
            <div class="input-group-text"><i class="far fa-percent"></i></div>
          </div>
          @error('persentase')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
  
        <div class="mt-4">
            <button type="submit" class="btn btn-success">{{ __('Simpan') }}</</button>
          </div>
      </div>
      <!-- /.card-body -->      
    </form>
  </div>
@endsection