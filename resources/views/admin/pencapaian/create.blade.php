@extends('layouts.admin.app')

@section('title', 'Tambah pencapaian')

@section('content')
    <div class="card card-success m-2">
        <div class="card-header">
            <h3 class="card-title">{{ __('Tambah pencapaian') }}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="manual" data-toggle="pill" href="#custom-tabs-four-home" role="tab"
                        aria-controls="custom-tabs-four-home" aria-selected="true">Manual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="upload" data-toggle="pill" href="#custom-tabs-four-profile" role="tab"
                        aria-controls="custom-tabs-four-profile" aria-selected="false">Upload</a>
                </li>
            </ul>
            <div class="tab-content" id="custom-tabs-four-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="manual">
                    <!-- form start -->

                    <div class="card-body">
                        @if (auth()->user()->roles_id == 1)
                            <form method="POST" action="{{ route('super.pencapaian.store') }}"
                                enctype='multipart/form-data'>
                            @elseif (auth()->user()->roles_id == 2)
                                <form method="POST" action="{{ route('admin.pencapaian.store') }}"
                                    enctype='multipart/form-data'>
                                @elseif (auth()->user()->roles_id == 3)
                                    <form method="POST" action="{{ route('opd.pencapaian.store') }}"
                                        enctype='multipart/form-data'>
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="tujuan_id">{{ __('ID Tujuan') }}</label>
                            <select class="form-control col-form-label rounded-2" name="tujuan_id" id="tujuan_id" onchange="getIndikator(this.value)"
                                required>
                                <option value="">Pilih Tujuan</option>
                                @foreach ($tujuans as $tujuan)
                                    <option value="{{ $tujuan->id }}">{{ $tujuan->id }}.
                                        {{ $tujuan->nama_tujuan }}</option>
                                @endforeach
                            </select>
                            @error('tujuan_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="indikator_id">{{ __('ID Indikator') }}</label>
                            <select class="form-control col-form-label rounded-2" name="indikator_id"
                                id="indikator_id" required>
                                <option value="">Pilih Indikator</option>
                            </select>
                            @error('indikator_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tahun">{{ __('Tahun') }}</label>
                            <input type="tahun" class="form-control @error('tahun') is-invalid @enderror" id="tahun"
                                placeholder="2020" name="tahun" required autocomplete="tahun" autofocus>
                            @error('tahun')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tipe">{{ __('Jenis Pencapaian') }}</label>
                            <select class="form-control col-form-label rounded-2" name="tipe" id="tipe" required>
                                <option value="%">Persen (%)</option>
                                <option value="orang">Orang</option>
                            </select>
                            @error('tipe')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="persentase">{{ __('Persentase Keberhasilan') }}</label>
                            <div class="input-group" id="persentase">
                                <input type="number" class="form-control @error('persentase') is-invalid @enderror"
                                    id="persentase" placeholder="Masukkan persentase keberhasilan" name="persentase"
                                    required autocomplete="current-persentase">
                            </div>
                            @error('persentase')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="persentase">{{ __('Sumber Data') }}</label>
                            <div class="input-group" >
                                <input type="text" class="form-control @error('persentase') is-invalid @enderror"
                                    placeholder="Masukkan sumber data" name="sumber_data"
                                    required autocomplete="current-sumber_data">
                            </div>
                            @error('persentase')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-success">{{ __('Simpan') }}</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="upload">
                    <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                        aria-labelledby="manual">
                        <!-- form start -->

                        <div class="card-body">
                            @if (auth()->user()->roles_id == 1)
                                <form method="POST" action="{{ route('super.pencapaian.import') }}"
                                    enctype='multipart/form-data'>
                                @elseif (auth()->user()->roles_id == 2)
                                    <form method="POST" action="{{ route('admin.pencapaian.import') }}"
                                        enctype='multipart/form-data'>
                                    @elseif (auth()->user()->roles_id == 3)
                                        <form method="POST" action="{{ route('opd.pencapaian.import') }}"
                                            enctype='multipart/form-data'>
                            @endif
                            @csrf
                            <div class="form-group">
                                <label for="File">{{ __('File') }}</label>
                                <input type="file" class="form-control @error('File') is-invalid @enderror"
                                    id="file" placeholder="Masukkan File" name="file" required
                                    autocomplete="file" autofocus>
                                @error('File')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="tahun">{{ __('Tahun') }}</label>
                                <input type="tahun" class="form-control @error('tahun') is-invalid @enderror"
                                    id="tahun" placeholder="2020" name="tahun" required autocomplete="tahun"
                                    autofocus>
                                @error('tahun')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <a target="_blank" href="https://docs.google.com/spreadsheets/d/1WSfNsuYFjru5dCCjRN-Zn9c4hvdsWB5N/edit?usp=drive_link&ouid=106704558331702404617&rtpof=true&sd=true">Download template file</a>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-success">{{ __('Simpan') }}</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- /.card-body -->
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

        function getIndikator(id){
            $('#indikator_id').empty();
            $('#indikator_id').append(`<option value="">Pilih Indikator</option>`);
            $.ajax({
                type: 'GET',
                url: "{{ route('get-indikator', '') }}"+'/'+id,
                success: function(response) {
                    response.forEach(element => {
                        $('#indikator_id').append(`<option value="${element['kode_indikator']}">${element['kode_indikator']}. ${element['nama_indikator']}</option>`);
                    });
                }
            });
        }

    </script>
