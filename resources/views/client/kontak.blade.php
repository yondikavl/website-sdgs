@extends('layouts.client.app')

@section('title', 'Hubungi Kami')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header bg-success">{{ __('Kirim Pesan') }}</div>
        <img class="w-100" src="{{ asset('assets/img/slider.png') }}" alt="">
        <div class="card-body">
          <form method="POST" action="mailto:sekretariat.sdgs@bappeda.go.id">
            @csrf

            <div class="form-group">
              <label for="name">{{ __('Nama') }}</label>
              <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="nama..." required autocomplete="name" autofocus>
              @error('name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="email">{{ __('Email') }}</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="email..." required autocomplete="email">
              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <label for="message">{{ __('Pesan') }}</label>
              <textarea id="message" class="form-control @error('message') is-invalid @enderror" name="message" placeholder="pesan..." required>{{ old('message') }}</textarea>
              @error('message')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-success">{{ __('Kirim') }}</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-12">
        <img class="w-100" src="{{ asset('assets/img/slider.png') }}" alt="">
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe width="100%" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=bappeda%20kota%20bandar%20lampung&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
      </div>
      <img class="w-100" src="{{ asset('assets/img/slider.png') }}" alt="">
    </div>
  </div>
</div>
@endsection
