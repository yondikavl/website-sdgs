@extends('layouts.admin.app')

@section('title', 'Edit Pilar')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Edit Pilar') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.pilar.update', $pilar->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="text-center py-3 form-group">
          <label for="ikon_pilar" style="cursor: pointer">
            @if ($pilar->ikon_pilar == Null)
                <i class="fa-solid fa-camera fa-2xl"></i>
                <input type="file" class="visually-hidden" name="ikon_pilar" id="ikon_pilar" enabled>
                @error('ikon_pilar')
                    <span class="invalid-feedback text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            @else
                <img src="{{ asset('assets/ikon') }}/{{ $pilar->ikon_pilar }}" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="">
                <input type="file" class="visually-hidden" name="ikon_pilar" id="ikon_pilar" enabled>
                @error('ikon_pilar')
                    <span class="invalid-feedback text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            @endif
          </label>
        </div>
        <div class="form-group">
          <label for="nama_pilar">{{ __('Nama Pilar') }}</label>
          <input type="nama_pilar" class="form-control @error('nama_pilar') is-invalid @enderror" id="nama_pilar" value="{{$pilar->nama_pilar}}" name="nama_pilar" required autocomplete="nama_pilar" autofocus>
            @error('nama_pilar')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi_pilar">{{ __('Deskripsi Pilar') }}</label>
          <input type="deskripsi_pilar" class="form-control @error('deskripsi_pilar') is-invalid @enderror" id="deskripsi_pilar" value="{{$pilar->deskripsi_pilar}}" name="deskripsi_pilar" required autocomplete="current-deskripsi_pilar">
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