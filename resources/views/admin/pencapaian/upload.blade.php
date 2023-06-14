@extends('layouts.admin.app')

@section('title', 'Tambah pencapaian Manual')

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
          <label for="uploadExcel">{{ __('Excel Data') }}</label>
          <div class="input-group" id="uploadExcel">
            <input type="file" class="form-control @error('uploadExcel') is-invalid @enderror" id="uploadExcel" placeholder="Masukkan uploadExcel data" name="uploadExcel" required autocomplete="current-sumber">
          </div>
          @error('sumber')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        <div class="mt-4">
            <button type="submit" class="btn btn-success">{{ __('Simpan') }}</</button>
          </div>
      </div>
      <!-- /.card-body -->      
    </form>
  </div>
@endsection