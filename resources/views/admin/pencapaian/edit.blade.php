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
                    <label for="persentase">{{ __('Persentase') }}</label>
                    <input type="text" class="form-control @error('persentase') is-invalid @enderror" id="persentase" value="{{ $pencapaian->persentase }}" name="persentase" required autocomplete="persentase" autofocus>
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
            {{-- <div class="col-md-4">
                <label for="nama_kegiatan">{{ __('Nama Pencapaian/Kegiatan') }}</label>
                <input type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror" id="nama_kegiatan" value="{{ $pencapaian->nama_kegiatan }}" name="nama_kegiatan" autocomplete="nama_kegiatan">
                @error('nama_kegiatan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="anggaran">{{ __('Anggaran') }}</label>
                <input type="text" class="form-control @error('anggaran') is-invalid @enderror" id="anggaran" value="{{ $pencapaian->anggaran }}" name="anggaran" autocomplete="anggaran">
                @error('anggaran')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="sumber_pendanaan">{{ __('Sumber Pendanaan') }}</label>
                <input type="text" class="form-control @error('sumber_pendanaan') is-invalid @enderror" id="sumber_pendanaan" value="{{ $pencapaian->sumber_pendanaan }}" name="sumber_pendanaan" autocomplete="sumber_pendanaan">
                @error('sumber_pendanaan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="lokasi">{{ __('Lokasi Pelaksanaan') }}</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" value="{{ $pencapaian->lokasi }}" name="lokasi" autocomplete="lokasi">
                @error('lokasi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div> --}}
            <div class="col-md-4">
                <label for="tingkatan">{{ __('Tingkatan') }}</label>
                <input type="text" class="form-control @error('Tingkatan') is-invalid @enderror" id="tingkatan" value="{{ $pencapaian->tingkatan ?? '-'}}" name="tingkatan" autocomplete="tingkatan">
                @error('tingkatan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-4">
                <label for="keterangan">{{ __('Keterangan') }}</label>
                <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" value="{{ $pencapaian->keterangan ?? '-'}}" name="keterangan" autocomplete="keterangan">
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
