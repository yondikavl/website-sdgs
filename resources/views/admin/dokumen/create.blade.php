@extends('layouts.admin.app')

@section('title', 'Tambah Dokumen')

@section('content')

<form action="{{ route('super.dokumen.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror" required>
        @error('judul')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" accept="image/*">
        @error('gambar')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group">
        <label for="file">File (PDF)</label>
        <input type="file" name="file" class="form-control @error('file') is-invalid @enderror" accept=".pdf">
        @error('file')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>

@endsection
