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
          <label for="indikator_id">{{ __('ID Indikator') }}</label>
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
        <div class="form-group">
          <label for="subindikator_id">{{ __('ID Sub-Indikator') }}</label>
          <select class="form-control col-form-label rounded-2" name="subindikator_id" id="subindikator_id" required>
            @foreach ($subindikators->where('indikator_id',) as $subindikator)
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
          <label for="tahun">{{ __('Tahun') }}</label>
          <input type="tahun" class="form-control @error('tahun') is-invalid @enderror" id="tahun" placeholder="2020" name="tahun" required autocomplete="tahun" autofocus>
              @error('tahun')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="tipe">{{ __('Jenis Pencapaian') }}</label>
          <select class="form-control col-form-label rounded-2" name="tipe" id="tipe" required>
              <option value="%">Persen (%)</option>
              <option value="orang">Orang</option>
          </select>  
            @error('tipe')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="persentase">{{ __('Persentase Keberhasilan') }}</label>
          <div class="input-group" id="persentase">
            <input type="number" class="form-control @error('persentase') is-invalid @enderror" id="persentase" placeholder="Masukkan persentase keberhasilan" name="persentase" required autocomplete="current-persentase">
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