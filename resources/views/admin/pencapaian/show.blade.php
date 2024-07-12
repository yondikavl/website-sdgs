@extends('layouts.admin.app')

@section('title', 'Detail pencapaian')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Detail pencapaian') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.pencapaian.show', $pencapaian->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.pencapaian.show', $pencapaian->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 3)
    <form method="POST" action="{{ route('opd.pencapaian.show', $pencapaian->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
        <div class="card-body">
          <div class="d-flex col-12 flex-row">
            <div class="form-group col-6">
              <label for="tujuan_id">{{ __('ID Tujuan') }}</label>
              <select class="form-control col-form-label rounded-2" name="tujuan_id" id="tujuan_id" disabled>
                @foreach ($tujuans as $tujuan)
                <option value="{{$tujuan->id}}">{{$tujuan->id}}. {{$tujuan->nama_tujuan}}</option>
                @endforeach
              </select>
                @error('tujuan_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-6">
              <label for="indikator_id">{{ __('ID Indikator') }}</label>
              <select class="form-control col-form-label rounded-2" name="indikator_id" id="indikator_id" disabled>
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
            </div>
            <div class="d-flex col-12 flex-row">
            <div class="form-group col-4">
              <label for="tahun">{{ __('Tahun') }}</label>
              <input type="tahun" class="form-control @error('tahun') is-invalid @enderror" id="tahun" value="{{$pencapaian->tahun}}" name="tahun" disabled autocomplete="tahun" autofocus>
                @error('tahun')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group col-4">
              <label for="persentase">{{ __('Persentase') }}</label>
              <input type="number" class="form-control @error('persentase') is-invalid @enderror" id="persentase" value="{{$pencapaian->persentase}}" name="persentase" disabled autocomplete="persentase" autofocus>
              @error('persentase')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
            </div>
            <div class="d-flex col-12 flex-row">
            <div class="form-group col-6">
                @if (auth()->user()->roles_id == 1)
                  <a class="btn btn-success" href="/super/pencapaian/">{{ __('Kembali') }}</a>
                @elseif (auth()->user()->roles_id == 2)
                  <a class="btn btn-success" href="/admin/pencapaian/">{{ __('Kembali') }}</a>
                @elseif (auth()->user()->roles_id == 3)
                  <a class="btn btn-success" href="/opd/pencapaian/">{{ __('Kembali') }}</a>
                @endif
            </div>
            </div>
          </div>
      <!-- /.card-body -->
    </form>
  </div>
@endsection