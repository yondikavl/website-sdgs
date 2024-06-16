@extends('layouts.admin.app')

@section('title', 'Tambah pencapaian')

@section('style')
    <style>
        .table-cell-padding td {
            padding: 10px;
        }
    </style>
@endsection

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
                            <select class="form-control col-form-label rounded-2" name="tujuan_id" id="tujuan_id"
                                onchange="getIndikator(this.value)" required>
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
                            <select class="form-control col-form-label rounded-2" name="indikator_id" id="indikator_id"
                                required>
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
                            <div class="input-group">
                                <input type="text" class="form-control @error('persentase') is-invalid @enderror"
                                    placeholder="Masukkan sumber data" name="sumber_data" required
                                    autocomplete="current-sumber_data">
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
                        aria-labelledby="upload">
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
                                <label for="files">{{ __('File') }}</label>
                                <input type="file" class="form-control @error('File') is-invalid @enderror"
                                    id="files" placeholder="Masukkan File" name="files[]" multiple="true" required
                                    autocomplete="file" autofocus onchange="previewFiles()">
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
                                <a target="_blank"
                                    href="https://docs.google.com/spreadsheets/d/1WSfNsuYFjru5dCCjRN-Zn9c4hvdsWB5N/edit?usp=drive_link&ouid=106704558331702404617&rtpof=true&sd=true">Download
                                    template file</a>
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


    <div class="modal fade" id="filePreviewModal" tabindex="-1" aria-labelledby="filePreviewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="filePreviewModalLabel">Preview Isi File</h5>
                    <button id="btn_modal_close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="file-content" class="table-responsive"></div>
                </div>
                <div class="modal-footer">
                    <button id="btn_modal_close_footer" type="button" class="btn btn-danger"
                        data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#btn_modal_close').on('click', function() {
                $('#filePreviewModal').modal('hide');
            });
        });

        $(document).ready(function() {
            $('#btn_modal_close_footer').on('click', function() {
                $('#filePreviewModal').modal('hide');
            });
        });

        function getIndikator(id) {
            $('#indikator_id').empty();
            $('#indikator_id').append(`<option value="">Pilih Indikator</option>`);
            $.ajax({
                type: 'GET',
                url: "{{ route('get-indikator', '') }}" + '/' + id,
                success: function(response) {
                    response.forEach(element => {
                        $('#indikator_id').append(
                            `<option value="${element['kode_indikator']}">${element['kode_indikator']}. ${element['nama_indikator']}</option>`
                        );
                    });
                }
            });
        }

        function previewFiles() {
            const content = document.getElementById('file-content');
            const files = document.getElementById('files').files;

            content.innerHTML = '';

            for (const file of files) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    const data = new Uint8Array(e.target.result);
                    const workbook = XLSX.read(data, {
                        type: 'array'
                    });
                    const firstSheetName = workbook.SheetNames[0];
                    const worksheet = workbook.Sheets[firstSheetName];
                    const html = XLSX.utils.sheet_to_html(worksheet, {
                        id: "data-table",
                        editable: false
                    });

                    const tempDiv = document.createElement('div');
                    tempDiv.innerHTML = html;
                    tempDiv.querySelector('table').classList.add('table-cell-padding', 'table', 'table-striped');
                    content.innerHTML += tempDiv.innerHTML;
                };
                reader.readAsArrayBuffer(file);
            }

            $('#filePreviewModal').modal('show');
        }
    </script>
@endsection
