@extends('layouts.admin.app')

@section('title', 'Tambah alamat')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Tambah alamat') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
        
      <div class="card-body">
        <form action="{{ route('super.alamat.store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label>Nama Kelurahan</label>
                <input type="text" name="nama_kelurahan" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Longitude</label>
                <input type="text" name="long" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Latitude</label>
                <input type="text" name="lat" class="form-control">
            </div>
        <div class="">
            <button type="submit" class="btn btn-success mt-3">{{ __('Simpan') }}</</button>
          </div>
        </form>
      </div>
    
      <!-- /.card-body -->
    
  </div>
@endsection
