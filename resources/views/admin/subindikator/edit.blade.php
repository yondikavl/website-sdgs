@extends('layouts.admin.app')

@section('title', 'Edit Sub-Indikator')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Edit Sub-Indikator') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.subindikator.update', $subindikator->id) }}">
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.subindikator.update', $subindikator->id) }}">
    @endif
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="indikator_id">{{ __('ID Indikator Sekarang') }}</label>
          <select class="form-control col-form-label rounded-2" name="indikator_id" id="indikator_id" required>
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
          <input type="nama_sub" class="form-control @error('nama_sub') is-invalid @enderror" id="nama_sub" value="{{$subindikator->nama_sub}}" name="nama_sub" required autocomplete="nama_sub" autofocus>
            @error('nama_sub')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="indikator_id">{{ __('ID Indikator Baru (jika ingin diganti)') }}</label>
          <select class="form-control col-form-label rounded-2" name="indikator_id" id="indikator_id" required>
            @foreach ($indikators as $indikator)
            <option value="{{$indikator->id}}">{{$indikator->id}}. {{$indikator->nama_indikator}}</option>
            @endforeach
          </select>
            @error('indikator_id')
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
