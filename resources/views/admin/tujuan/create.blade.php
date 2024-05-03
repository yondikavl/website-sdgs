@extends('layouts.admin.app')

@section('title', 'Tambah Tujuan')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Tambah Tujuan') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.tujuan.store') }}" enctype='multipart/form-data'>
    @endif
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="ikon_tujuan">{{ __('Ikon tujuan') }}</label>
          <input type="file" class="form-control @error('ikon_tujuan') is-invalid @enderror" id="ikon_tujuan" placeholder="Masukkan ikon tujuan" value="{{ old('ikon_tujuan') }}" name="ikon_tujuan" required autocomplete="ikon_tujuan" autofocus>
            @error('ikon_tujuan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="pilar_id">{{ __('ID Pilar') }}</label>
          <select class="form-control col-form-label rounded-2" name="pilar_id" id="pilar_id" required>
            @foreach ($pilars as $pilar)
              <option value="{{$pilar->id}}">{{$pilar->id}}. {{$pilar->nama_pilar}}</option>
            @endforeach
          </select>  
            @error('pilar_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="nama_tujuan">{{ __('Nama tujuan') }}</label>
          <input type="nama_tujuan" class="form-control @error('nama_tujuan') is-invalid @enderror" id="nama_tujuan" placeholder="Masukkan nama tujuan" value="{{ old('nama_tujuan') }}" name="nama_tujuan" required autocomplete="nama_tujuan" autofocus>
            @error('nama_tujuan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi_tujuan">{{ __('Deskripsi tujuan') }}</label>
          <input type="deskripsi_tujuan" class="form-control @error('deskripsi_tujuan') is-invalid @enderror" id="deskripsi_tujuan" placeholder="Masukkan deskripsi tujuan" name="deskripsi_tujuan" required autocomplete="current-deskripsi_tujuan">
            @error('deskripsi_tujuan')
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