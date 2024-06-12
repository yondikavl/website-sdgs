@extends('layouts.admin.app')

@section('title', 'Detail Kecamatan')

@section('content')
<div class="card card-success m-2">
    <div class="card-header">
        <h3 class="card-title">{{ __('Detail Kecamatan') }}</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="POST" enctype='multipart/form-data'>
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">{{ __('Nama kecamatan') }}</label>
                <input type="text" class="form-control" id="name" value="{{ $kecamatan->name }}" disabled>
            </div>
            <div class="form-group">
                <label for="deskripsi">{{ __('Deskripsi kecamatan') }}</label>
                <input type="text" class="form-control" id="deskripsi" value="{{ $kecamatan->deskripsi }}" disabled>
            </div>
            <div class="">
                @if (auth()->user()->roles_id == 1)
                    <a class="btn btn-success" href="/super/kecamatan/">{{ __('Kembali') }}</a>
                @elseif (auth()->user()->roles_id == 2)
                    <a class="btn btn-success" href="/admin/kecamatan/">{{ __('Kembali') }}</a>
                @elseif (auth()->user()->roles_id == 3)
                    <a class="btn btn-success" href="/opd/kecamatan/">{{ __('Kembali') }}</a>
                @endif
            </div>
        </div>
        <!-- /.card-body -->
    </form>
</div>
@endsection
