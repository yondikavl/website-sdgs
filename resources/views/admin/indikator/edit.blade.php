@extends('layouts.admin.app')

@section('title', 'Edit Indikator')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Edit Indikator') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.indikator.update', $indikator->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.indikator.update', $indikator->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 3)
    <form method="POST" action="{{ route('opd.indikator.update', $indikator->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
        @method('PUT')
      <div class="card-body my-3">
        <div class="form-group">
          <label for="tujuan_id">{{ __('Tujuan') }}</label>
          <select class="form-control col-form-label rounded-2" name="tujuan_id" id="tujuan_id" required>
            @foreach ($tujuans as $tujuan)
            <option value="{{$tujuan->id}}" {{ $tujuan->id == $indikator->tujuan_id ? 'selected' : '' }}>{{$tujuan->id}}. {{$tujuan->nama_tujuan}}</option>
            @endforeach
          </select>
            @error('tujuan_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="kode_indikator">{{ __('Kode Indikator') }}</label>
          <input type="kode_indikator" class="form-control @error('kode_indikator') is-invalid @enderror" id="kode_indikator" value="{{$indikator->kode_indikator}}" name="kode_indikator" required autocomplete="kode_indikator" autofocus>
            @error('kode_indikator')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="nama_indikator">{{ __('Nama Indikator') }}</label>
          <input type="nama_indikator" class="form-control @error('nama_indikator') is-invalid @enderror" id="nama_indikator" value="{{$indikator->nama_indikator}}" name="nama_indikator" required autocomplete="nama_indikator" autofocus>
            @error('nama_indikator')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="rumus">{{ __('Rumus (File Gambar)') }}</label>
          <input type="file" class="form-control @error('rumus') is-invalid @enderror" id="rumus-input" name="rumus" accept="image/*">
          @error('rumus')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

          @if ($indikator->rumus)
              <div class="mt-3">
                  <label>{{ __('Pratinjau Rumus') }}</label><br>
                  <img id="rumus-preview" src="{{ asset('assets/img/' . $indikator->rumus) }}" alt="Pratinjau Rumus" style="max-width: 200px;">
              </div>
          @endif
      </div>
        <div class="form-group">
          <label for="deskripsi">{{ __('Deksripsi') }}</label>
          <input type="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" value="{{$indikator->deskripsi}}" name="deskripsi" autocomplete="deskripsi" autofocus>
            @error('deskripsi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="tipe">{{ __('Jenis Pencapaian') }}</label>
          <input type="tipe" class="form-control @error('tipe') is-invalid @enderror" id="tipe" value="{{$indikator->tipe}}" name="tipe" autocomplete="tipe" autofocus>
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
  </div>
@endsection

@section('script')
<!-- Preview Script -->
<script>
  function previewImage() {
      var input = document.getElementById('rumus-input');
      var preview = document.getElementById('rumus-preview');

      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
              preview.src = e.target.result;
          };

          reader.readAsDataURL(input.files[0]);
      }
  }

  document.getElementById('rumus-input').addEventListener('change', previewImage);
  window.addEventListener('load', previewImage);
</script>
@endsection
