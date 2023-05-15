@extends('layouts.admin.app')

@section('title', 'Detail Sub-Indikator')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Detail Sub-Indikator') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.subindikator.show', $subindikator->id) }}">
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.subindikator.show', $subindikator->id) }}">
    @endif
        @csrf
      <div class="card-body">
        <div class="text-center py-3 form-group">
          <label for="ikon_sub" style="cursor: pointer">
            @if ($sub->ikon_sub == Null)
                <i class="fa-solid fa-camera fa-2xl"></i>
                <input type="file" class="visually-hidden" name="ikon_sub" id="ikon_sub" disabled>
                @error('ikon_sub')
                    <span class="invalid-feedback text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            @else
                <img src="{{ asset('assets/ikon') }}/{{ $sub->ikon_sub }}" style="width:200px !important; height:200px !important;" class="img-circle elevation-2" alt="">
                <input type="file" class="visually-hidden" name="ikon_sub" id="ikon_sub" disabled>
                @error('ikon_sub')
                    <span class="invalid-feedback text-center" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            @endif
          </label>
        </div>
        <div class="form-group">
          <label for="indikator_id">{{ __('ID Indikator') }}</label>
          <select class="form-control col-form-label rounded-2" name="indikator_id" id="indikator_id" disabled>
            <option value="{{$subindikator->indikator_id}}">{{$subindikator->indikator_id}}</option>
          </select> 
            @error('indikator_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="nama_sub">{{ __('Nama Sub-Indikator') }}</label>
          <input type="nama_sub" class="form-control @error('nama_sub') is-invalid @enderror" id="nama_sub" value="{{$subindikator->nama_sub}}" name="nama_sub" disabled>
            @error('nama_sub')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="deskripsi_sub">{{ __('Deskripsi Sub-Indikator') }}</label>
          <input type="deskripsi_sub" class="form-control @error('deskripsi_sub') is-invalid @enderror" id="deskripsi_sub" value="{{$subindikator->deskripsi_sub}}" name="deskripsi_sub" disabled>
            @error('deskripsi_sub')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="">
          @if (auth()->user()->roles_id == 1)
            <a class="btn btn-success" href="/super/subindikator/">{{ __('Kembali') }}</a>
          @elseif (auth()->user()->roles_id == 2)  
            <a class="btn btn-success" href="/admin/subindikator/">{{ __('Kembali') }}</a>
          @endif
        </div>
      </div>
      <!-- /.card-body -->      
    </form>
  </div>
@endsection