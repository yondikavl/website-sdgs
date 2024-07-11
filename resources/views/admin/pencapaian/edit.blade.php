@extends('layouts.admin.app')

@section('title', 'Edit Pencapaian')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Edit Pencapaian') }}</h3>
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
          <div class="row">
              <div class="col-md-4">
                  <label for="tahun">{{ __('Tahun') }}</label>
                  <input type="number" class="form-control @error('tahun') is-invalid @enderror" id="tahun" value="{{ $pencapaian->tahun }}" name="tahun" required autocomplete="tahun" autofocus>
                  @error('tahun')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="col-md-4">
                  <label for="tipe">{{ __('Jenis Pencapaian') }}</label>
                  <select class="form-control col-form-label rounded-2" name="tipe" id="tipe" required>
                      <option selected value="{{ $pencapaian->tipe }}">{{ $pencapaian->tipe }}</option>
                      <option value="%">Persen (%)</option>
                      <option value="orang">Orang</option>
                  </select>
                  @error('tipe')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="col-md-4">
                  <label for="persentase">{{ __('Persentase') }}</label>
                  <input type="number" class="form-control @error('persentase') is-invalid @enderror" id="persentase" value="{{ $pencapaian->persentase }}" name="persentase" required autocomplete="persentase" autofocus>
                  @error('persentase')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="col-md-4">
                  <label for="sumber_data">{{ __('Sumber Data') }}</label>
                  <input type="text" class="form-control @error('sumber_data') is-invalid @enderror" id="sumber_data" value="{{ $pencapaian->sumber_data }}" name="sumber_data" required autocomplete="sumber_data">
                  @error('sumber_data')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
              <div class="col-md-4">
                <label for="kecamatan">{{ __('Kecamatan') }}</label>
                <select class="form-control col-form-label rounded-2" name="kecamatan_id" id="kecamatan" required>
                    <option value="">Pilih Kecamatan</option>
                    @foreach($kecamatans as $kecamatan)
                        <option value="{{$kecamatan->id}}" {{ $pencapaian->hasKecamatan($kecamatan->id) ? 'selected' : '' }}>
                            {{$kecamatan->name}}
                        </option>
                    @endforeach
                </select>
                @error('kecamatan_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
                <div class="col-md-4">
                    <label for="tingkatan">{{ __('Tingkatan') }}</label>
                    <input type="text" class="form-control @error('Tingkatan') is-invalid @enderror" id="tingkatan" value="{{ $pencapaian->tingkatan }}" name="tingkatan" required autocomplete="tingkatan">
                    @error('tingkatan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            <div class="col-md-4">
                <label for="keterangan">{{ __('Keterangan') }}</label>
                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" value="{{ $pencapaian->keterangan }}" name="keterangan" required autocomplete="keterangan">
                @error('keterangan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
            <div class="col-md-6 pt-3">
                <button type="submit" class="btn btn-success">{{ __('Simpan') }}</button>
            </div>
      </div>
    </form>
</div>
@endsection
