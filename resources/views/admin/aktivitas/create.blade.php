@extends('layouts.admin.app')

@section('title', 'Tambah Aktivitas')

@section('content')
<div class="card card-success m-2" style="width: 500px;">
    <div class="card-header">
      <h3 class="card-title">{{ __('Tambah Aktivitas') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.aktivitas.store') }}">
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.aktivitas.store') }}">
    @endif
        @csrf
      <div class="card-body">
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
          <label for="nama_aktivitas">{{ __('Nama aktivitas') }}</label>
          <input type="nama_aktivitas" class="form-control @error('nama_aktivitas') is-invalid @enderror" id="nama_aktivitas" placeholder="Masukkan nama aktivitas" value="{{ old('nama_aktivitas') }}" name="nama_aktivitas" required autocomplete="nama_aktivitas" autofocus>
            @error('nama_aktivitas')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi_aktivitas">{{ __('Deskripsi aktivitas') }}</label>
          <input type="deskripsi_aktivitas" class="form-control @error('deskripsi_aktivitas') is-invalid @enderror" id="deskripsi_aktivitas" placeholder="Masukkan deskripsi aktivitas" name="deskripsi_aktivitas" required autocomplete="current-deskripsi_aktivitas">
            @error('deskripsi_aktivitas')
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