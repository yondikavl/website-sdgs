@extends('layouts.admin.app')

@section('title', 'Tambah User')

@section('style')
<style>
.checkbox-container {
    display: flex;
    flex-direction: column;
}

.checkbox-item {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.checkbox-item label {
    margin-left: 5px;
}
</style>
@endsection

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
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                    placeholder="Masukkan nama user" value="{{ old('nama') }}" name="nama" required autocomplete="nama"
                    autofocus>
                @error('nama')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">{{ __('Email') }}</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="Masukkan email user" value="{{ old('email') }}" name="email" required
                    autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">{{ __('Kata Sandi') }}</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    placeholder="Masukkan kata sandi user" name="password" required autocomplete="current-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="roles_id">{{ __('Roles ID') }}</label>
                <select class="form-control col-form-label rounded-2" name="roles_id" id="roles_id">
                    <option value="1">Super Admin</option>
                    <option value="2">Admin</option>
                    <option value="3">OPD</option>
                    <option value="99">Guest</option>
                </select>
                @error('roles_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group" id="list-indikator" hidden>
                <label for="tujuan_id">{{ __('Tujuan') }}</label>
                <div id="tujuan_id"></div>
            </div>
            <div>
                <button type="submit" class="btn btn-success">{{ __('Simpan') }}</button>
            </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const rolesSelect = document.getElementById('roles_id');
        const listIndikator = document.getElementById('list-indikator');
        const tujuanContainer = document.getElementById('tujuan_id');

        rolesSelect.addEventListener('change', function() {
            if (rolesSelect.value == 3) {
                fetchTujuan();
            } else {
                listIndikator.hidden = true;
                tujuanContainer.innerHTML = '';
            }
        });

        function fetchTujuan() {
        fetch('{{ route('admin.get-indikator', ['roles_id' => 3]) }}')
        .then(response => response.json())
        .then(data => {
            listIndikator.hidden = false;
            tujuanContainer.innerHTML = '';

            data.forEach(tujuan => {
                const wrapper = document.createElement('div');
                wrapper.className = 'checkbox-item';

                const checkbox = document.createElement('input');
                checkbox.type = 'checkbox';
                checkbox.name = 'tujuan_id[]';
                checkbox.value = tujuan.id;

                const label = document.createElement('label');
                label.textContent = tujuan.nama_tujuan;
                label.appendChild(checkbox);

                wrapper.appendChild(checkbox);
                wrapper.appendChild(label);

                tujuanContainer.appendChild(wrapper);
            });
        })
        .catch(error => console.error('Error fetching tujuan:', error));
        }
    });
</script>

@endsection
