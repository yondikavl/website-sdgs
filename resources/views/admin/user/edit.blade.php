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
                <input type="nama" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    value="{{ $user->nama }}" name="nama" enabled>
                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    value="{{ $user->email }}" name="email" enabled>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">{{ __('Kata Sandi Baru (jika perlu)') }}</label>
                <input type="password" class="form-control" id="password" placeholder="Masukkan kata sandi baru"
                    name="password" enabled>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="roles_id">{{ __('Roles ID') }}</label>
                <select class="form-control col-form-label rounded-2" value="{{ $user->roles_id }}" name="roles_id"
                    id="roles_id" enabled>
                    @if (auth()->user()->roles_id == 1)
                        <option value="1" {{ $user->roles_id == 1 ? 'selected' : '' }}>Super Admin</option>
                        <option value="2" {{ $user->roles_id == 2 ? 'selected' : '' }}>Admin</option>
                    @endif
                    <option value="3" {{ $user->roles_id == 3 ? 'selected' : '' }}>Member</option>

                </select>
            </div>
            <div class="form-group" id="list-subindikator">
                <label for="indikator">{{ __('Indikator') }}</label>
                {{-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="permissions[]" value="'+item.id+'" id="permissions'+item.id+'">
                    <label class="form-check-label" for="permissions'+item.id+'">'+item.nama_indikator+'</label>
                </div> --}}
                @foreach ($indikators as $indikator)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="permissions[]" value="{{ $indikator->id }}"
                            {{ in_array($indikator->id, $user->permissions) ? 'checked' : '' }}>
                        <label class="form-check-label" for="permissions">{{ $indikator->nama_indikator }}</label>
                    </div>
                @endforeach
            </div>


            <div class="">
                <button type="submit" class="btn btn-success">{{ __('Simpan') }}</< /button>
            </div>
        </div>
        <!-- /.card-body -->
        </form>
    </div>
@endsection

@section('script')
    <script>
        window.onload = function() {
            var roles_id = $('#roles_id').val();
            if (roles_id == 3) {
                $('#list-subindikator').show();
            } else {
                $('#list-subindikator').hide();
            }
        }

        $(document).ready(function() {
            $('#list-subindikator').hide();
            $('#roles_id').change(function() {
                var roles_id = $(this).val();
                if (roles_id == 3) {
                    $('#list-subindikator').show();
                } else {
                    $('#list-subindikator').hide();
                }
            });
        });
    </script>
@endsection
