@extends('layouts.admin.app')

@section('title', 'Edit Data Kecamatan')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">{{ __('Edit Data Kecamatan') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.kecamatan.update', $kecamatan->id) }}" enctype='multipart/form-data'>
        @method('PUT')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">{{ __('Nama Kecamatan') }}</label>
                <select class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                    <option value="">{{ __('Pilih Nama Kecamatan') }}</option>
                    @foreach ($kecamatans as $item)
                        <option value="{{ $item->name }}" {{ $kecamatan->name == $item->name ? 'selected' : '' }}>
                            {{ $item->name }}
                        </option>
                    @endforeach
                </select>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="deskripsi">{{ __('Deskripsi Kecamatan') }}</label>
                <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Masukkan deskripsi kecamatan" name="deskripsi" value="{{ $kecamatan->deskripsi }}" required autocomplete="current-deskripsi">
                @error('deskripsi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="">
                <button type="submit" class="btn btn-success">{{ __('Simpan') }}</button>
            </div>
        </div>
        <!-- /.card-body -->
    </form>
    @endif
</div>
@endsection
