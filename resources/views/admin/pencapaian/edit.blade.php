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
          <div class="d-flex col-12 flex-row">
          <div class="form-group col-4">
            <label for="tahun">{{ __('Tahun') }}</label>
            <input type="tahun" class="form-control @error('tahun') is-invalid @enderror" id="tahun" value="{{$pencapaian->tahun}}" name="tahun" required autocomplete="tahun" autofocus>
              @error('tahun')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group col-4">
            <label for="tipe">{{ __('Jenis Pencapaian') }}</label>
            <select class="form-control col-form-label rounded-2" name="tipe" id="tipe" required>
                <option selected value="{{$pencapaian->tipe}}">{{$pencapaian->tipe}}</option>
                <option value="%">Persen (%)</option>
                <option value="orang">Orang</option>
            </select>
              @error('tipe')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="form-group col-4">
            <label for="persentase">{{ __('Persentase') }}</label>
            <input type="number" class="form-control @error('persentase') is-invalid @enderror" id="persentase" value="{{$pencapaian->persentase}}" name="persentase" required autocomplete="persentase" autofocus>
            @error('persentase')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          </div>
          <div class="d-flex col-12 flex-row">
          <div class="form-group col-6">
              <button type="submit" class="btn btn-success">{{ __('Simpan') }}</</button>
          </div>
          </div>
        </div>
      <!-- /.card-body -->
    </form>
  </div>
@endsection