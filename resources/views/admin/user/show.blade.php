@extends('layouts.admin.app')

@section('title', 'Detail User')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
      <h3 class="card-title">{{ __('Detail User') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    @if (auth()->user()->roles_id == 1)
    <form method="POST" action="{{ route('super.user.show', $user->id) }}">
    @elseif (auth()->user()->roles_id == 2)
    <form method="POST" action="{{ route('admin.user.show', $user->id) }}">
    @endif
        @csrf
        @method('PUT')
      <div class="card-body">
        <div class="form-group">
          <label for="nama">{{ __('Nama') }}</label>
          <input type="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" value="{{$user->nama}}" name="nama" disabled>
            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="email">{{ __('Email') }}</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{$user->email}}" name="email" disabled>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="roles_id">{{ __('Roles ID') }}</label>
            <select class="form-control col-form-label rounded-2" name="roles_id" id="roles_id" disabled>
                <option value="{{$user->roles_id}}">{{$user->roles_id}}</option>
            </select>
              @error('roles_id')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          </div>
          <div class="d-flex col-12 flex-row">
            <div class="form-group col-6">
                @if (auth()->user()->roles_id == 1)
                  <a class="btn btn-success" href="/super/user/">{{ __('Kembali') }}</a>
                @elseif (auth()->user()->roles_id == 2)
                  <a class="btn btn-success" href="/admin/user/">{{ __('Kembali') }}</a>
                @endif
            </div>
            </div>
      </div>
      <!-- /.card-body -->
    </form>
  </div>
@endsection