@extends('layouts.admin.app')

@section('title', 'Tambah User')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Tambah User') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.user.store') }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.user.store') }}" enctype='multipart/form-data'>
    @endif
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="nama">{{ __('Nama') }}</label>
          <input type="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan nama user" value="{{ old('nama') }}" name="nama" required autocomplete="nama" autofocus>
            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="email">{{ __('Email') }}</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan email user" value="{{ old('email') }}" name="email" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="password">{{ __('Kata Sandi') }}</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Masukkan kata sandi user" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="roles_id">{{ __('Roles ID') }}</label>
            <select class="form-control col-form-label rounded-2" name="roles_id" id="roles_id" required>
                @if (auth()->user()->roles_id == 1)
                <option value="1">Super Admin</option>
                <option value="2">Admin</option>
                @endif
                <option value="3">Member</option>
                <option value="99">Guest</option>
            </select>  
              @error('roles_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
        <div class="">
            <button type="submit" class="btn btn-success">{{ __('Simpan') }}</</button>
          </div>
      </div>
      <!-- /.card-body -->      
    </form>
  </div>
@endsection