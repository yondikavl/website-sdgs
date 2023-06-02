@extends('layouts.admin.app')

@section('title', 'Edit User')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Edit User') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.user.update', $user->id) }}" enctype='multipart/form-data'>
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.user.update', $user->id) }}" enctype='multipart/form-data'>
    @endif
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="nama">{{ __('Nama') }}</label>
          <input type="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{$user->nama}}" name="nama" enabled>
            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="email">{{ __('Email') }}</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{$user->email}}" name="email" enabled>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="password">{{ __('Kata Sandi Baru (jika perlu)') }}</label>
          <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi baru" name="password" enabled>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="roles_id">{{ __('Roles ID') }}</label>
            <select class="form-control col-form-label rounded-2" value="{{$user->roles_id}}" name="roles_id" id="roles_id" enabled>
                @if (auth()->user()->roles_id == 1)
                <option value="1">Super Admin</option>
                <option value="2">Admin</option>
                @endif
                <option value="3">Member</option>
                <option value="99">Guest</option>
            </select> 
          </div>
        <div class="">
            <button type="submit" class="btn btn-success">{{ __('Simpan') }}</</button>
          </div>
      </div>
      <!-- /.card-body -->      
    </form>
  </div>
@endsection