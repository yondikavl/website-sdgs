@extends('layouts.admin.app')

@section('title', 'Tambah pencapaian')

@section('style')
    <style>
        .table-cell-padding td {
            padding: 10px;
        }

        .table-header-green tr:nth-child(1),
        .table-header-green tr:nth-child(2) {
            background-color: #fff;
            color: black;
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
                    <a class="nav-link active" id="manual" data-toggle="pill" href="#custom-tabs-four-manual" role="tab"
                        aria-controls="custom-tabs-four-manual" aria-selected="true">Manual</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="upload" data-toggle="pill" href="#custom-tabs-four-upload" role="tab"
                        aria-controls="custom-tabs-four-upload" aria-selected="false">Upload</a>
                </li>
            </ul>
            <div class="tab-content" id="custom-tabs-four-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-four-manual" role="tabpanel" aria-labelledby="manual">
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
                            <label for="tujuan_id">{{ __('ID Tujuan') }}<span style="color:red"> * </span></label>
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
                            <label for="indikator_id">{{ __('ID Indikator') }}<span style="color:red"> * </span></label>
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
                        {{-- <div class="form-group">
                            <label for="nama_kegiatan">{{ __('Nama Pencapaian/Kegiatan') }}<span style="color:red"> (Masukkan nama pencapaian/kegiatan jika ada di indikator tersebut)</span></label>
                            <div class="input-group" id="nama_kegiatan">
                                <input type="text" class="form-control @error('nama_kegiatan') is-invalid @enderror"
                                    id="nama_kegiatan" placeholder="Masukkan nama pencapaian/kegiatan" name="nama_kegiatan"
                                    required autocomplete="current-nama_kegiatan">
                            </div>
                            @error('nama_kegiatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="tahun">{{ __('Tahun') }}<span style="color:red"> * </span></label>
                            <input type="tahun" class="form-control @error('tahun') is-invalid @enderror" id="tahunManual"
                                placeholder="2020" name="tahun" required autocomplete="tahun" autofocus>
                            @error('tahun')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="persentase">{{ __('Persentase Keberhasilan') }}<span style="color:red"> (Gunakan titik untuk bilangan koma)*</span></label>
                            <input type="text" class="form-control @error('persentase') is-invalid @enderror" id="persentaseManual" placeholder="5.72" name="persentase" required autocomplete="persentase" autofocus>
                            @error('persentase')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="sumber_data">{{ __('Sumber Data') }}<span style="color:red"> * </span></label>
                                <input type="text" class="form-control @error('sumber_data') is-invalid @enderror"
                                    placeholder="Dinas Sosial" name="sumber_data" required
                                    autocomplete="current-sumber_data">
                            @error('sumber_data')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Kecamatan">{{ __('Kecamatan') }}<span style="color:red"> (Lewati jika tidak ada data kecamatan) </span></label>
                            <select class="form-control col-form-label rounded-2" name="kecamatan_id[]" id="Kecamatan"
                                >
                                <option value="">Pilih Kecamatan</option>
                                @foreach($kecamatans as $kecamatan)
                                    <option value="{{$kecamatan->id}}">{{$kecamatan->name}}</option>
                                @endforeach
                            </select>
                            @error('kecamatan_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tingkatan">{{ __('Tingkatan') }}<span style="color:red"> (Lewati jika tidak ada data tingkatan tiap indikator) </span></label>
                            <div class="input-group">
                                <input type="text" class="form-control @error('tingkatan') is-invalid @enderror"
                                    placeholder="Masukkan Tingkatan" name="tingkatan">
                            </div>
                            @error('tingkatan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="anggaran">{{ __('Alokasi Anggaran') }}<span style="color:red"> (Rp Juta)
                            </span></label>
                            <div class="input-group" id="anggaran">
                                <input type="text" class="form-control @error('anggaran') is-invalid @enderror"
                                    id="anggaran" placeholder="Rp.5.000.000" name="anggaran"
                                    autocomplete="current-anggaran">
                            </div>
                            @error('anggaran')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="sumber_pendanaan">{{ __('Sumber Pendanaan') }}<span style="color:red"> (Optional)</span></label>
                            <div class="input-group" id="sumber_pendanaan">
                                <input type="text" class="form-control @error('sumber_pendanaan') is-invalid @enderror"
                                    id="sumber_pendanaan" placeholder="Bank Lampung" name="sumber_pendanaan"
                                    autocomplete="current-sumber_pendanaan">
                            </div>
                            @error('sumber_pendanaan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="lokasi">{{ __('Lokasi Pelaksanaan') }}<span style="color:red"> (Optional)</span></label>
                            <div class="input-group" id="lokasi">
                                <input type="text" class="form-control @error('lokasi') is-invalid @enderror"
                                    id="lokasi" placeholder="Masukkan lokasi pelaksanaan" name="lokasi"
                                    autocomplete="current-lokasi">
                            </div>
                            @error('lokasi')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="keterangan">{{ __('Keterangan') }}<span style="color:red"> (Optional) </span></label>
                            <div class="input-group">
                                <input type="text" class="form-control @error('keterangan') is-invalid @enderror"
                                    placeholder="Masukkan Keterangan" name="keterangan" >
                            </div>
                            @error('keterangan')
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
                <div class="tab-pane fade" id="custom-tabs-four-upload" role="tabpanel" aria-labelledby="upload">
                    <div class="tab-pane fade show active" id="custom-tabs-four-manual" role="tabpanel"
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
                            <a class="btn btn-success mb-2 float-right" target="_blank"
                            href="{{asset('assets/template/Admin-Template-Pencapaian.xlsx')}}"
                            download="Admin-Template-Pencapaian">
                            Download template file
                            </a>
                            <div class="form-group">
                                <label for="tahun">{{ __('Tahun') }} <span style="color:red"> * </span></label>
                                <input type="tahun" class="form-control @error('tahun') is-invalid @enderror"
                                    id="tahun" placeholder="2020" name="tahun" required autocomplete="tahun"
                                    autofocus>
                                @error('tahun')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="files">{{ __('File') }} <span style="color:red"> * </span></label>
                                <input type="file" class="form-control @error('File') is-invalid @enderror"
                                    id="files" placeholder="Masukkan File" name="files[]" multiple="true" required
                                    autocomplete="file" autofocus onchange="previewFiles()">
                                @error('File')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="modal fade" id="filePreviewModal" tabindex="-1" aria-labelledby="filePreviewModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
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
                                            data-dismiss="modal">Batal</button>
                                            <button type="submit" id="simpan" class="btn btn-success">{{ __('Simpan') }}</button>
                                            <button type="button" id="perbaiki" class="btn btn-danger" style="display: none;">{{ __('Perbaiki File') }}</button>
                                            <button type="button" id="tahunBtn" class="btn btn-danger" style="display: none;">{{ __('Isi Tahun Dulu!!') }}</button>
                                    </div>
                                </div>
                            </div>
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
    
            $('#btn_modal_close_footer').on('click', function() {
                $('#filePreviewModal').modal('hide');
            });
    
            $('#tahunBtn').on('click', function() {
                const tahun = $('#tahun').val().trim();
                if (tahun === '') {
                location.reload();
                } else {
                    $('#files').val('');
                    $('#file-content').empty();
                    $('#btn_modal_close_footer').hide();
                    $('#perbaiki').hide();
                    $('#simpan').show();
                    $('#filePreviewModal').modal('hide');
                }
            });
    
            $('#perbaiki').on('click', function() {
                $('#files').val('');
                $('#file-content').empty();
                $('#btn_modal_close_footer').hide();
                $('#perbaiki').hide();
                $('#simpan').show();
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
            const tahun = document.getElementById('tahun').value.trim();
    
            content.innerHTML = '';
            let hasNullData = false;
    
            for (const file of files) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    const data = new Uint8Array(e.target.result);
                    const workbook = XLSX.read(data, {
                        type: 'array'
                    });
                    const firstSheetName = workbook.SheetNames[0];
                    const worksheet = workbook.Sheets[firstSheetName];
                    const sheetData = XLSX.utils.sheet_to_json(worksheet, { header: 1 });
    
                    const headers = sheetData[1];
                    const kodeIndex = 0;
                    const namaIndex = 1;
                    const nilaiIndex = 2;
                    const sumberIndex = 3;
                    const kecamatanIndex = 4;
                    // const namaKegiatanIndex = 5;
                    // const anggaranIndex = 6;
                    // const sumberPendanaanIndex = 7;
                    // const lokasiIndex = 8;
                    const tingkatanIndex = 5;
                    const keteranganIndex = 6;
    
                    if (kodeIndex === -1 || namaIndex === -1) {
                        content.innerHTML += 'Kolom Kode dan/atau Nama tidak ditemukan.';
                        $('#simpan').hide();
                        $('#perbaiki').show();
                        return;
                    }
    
                    let tableHtml = '<table class="table table-striped table-header-green table-cell-padding">';
                    tableHtml += '<thead class="bg-success"><tr class="bg-success"><th>Kode Indikator</th><th>Nama Indikator</th><th>Nilai</th><th>Sumber Data</th><th>Nama Kecamatan</th><th>Tingkatan</th><th>Keterangan</th></tr></thead><tbody>';
    
                    for (let i = 2; i < sheetData.length; i++) {
                        const row = sheetData[i];
                        const kode = row[kodeIndex] ?? 'Kode Indikator tidak ada';
                        const nama = row[namaIndex] ?? 'Nama Indikator tidak ada';
                        const nilai = row[nilaiIndex] ?? 'Nilai tidak ada';
                        const sumber = row[sumberIndex] ?? 'Sumber data tidak ada';
                        const kecamatan = row[kecamatanIndex] ?? 'Nama Kecamatan data tidak ada';
                        // const namaKegiatan = row[namaKegiatanIndex] ?? '-';
                        // const anggaran = row[anggaranIndex] ?? '-';
                        // const sumberPendanaan = row[sumberPendanaanIndex] ?? '-';
                        // const lokasi = row[lokasiIndex] ?? '-';
                        const tingkatan = row[tingkatanIndex] ?? '-';
                        const keterangan = row[keteranganIndex] ?? '-';
    
                        const kodeClass = kode === 'Kode Indikator tidak ada' ? 'bg-danger' : '';
                        const namaClass = nama === 'Nama Indikator tidak ada' ? 'bg-danger' : '';
                        const nilaiClass = nilai === 'Nilai tidak ada' ? 'bg-danger' : '';
                        const sumberClass = sumber === 'Sumber data tidak ada' ? 'bg-danger' : '';
                        // const kecamatanClass = kecamatan === 'Kecamatan data tidak ada' ? 'bg-danger' : '';
                        // const namaKegiatanClass = namaKegiatan === 'Nama Pencapaian/Kegiatan data tidak ada' ? 'bg-danger' : '';
                        // const anggaranClass = anggaran === 'Anggaran data tidak ada' ? 'bg-danger' : '';
                        // const sumberPendanaanClass = sumberPendanaan === 'Sumber Pendanaan data tidak ada' ? 'bg-danger' : '';
                        // const lokasiClass = lokasi === 'Lokasi data tidak ada' ? 'bg-danger' : '';
                        // const tingkatanClass = tingkatan === 'Tingkatan data tidak ada' ? 'bg-danger' : '';
                        // const keteranganClass = keterangan === 'Keterangan data tidak ada' ? 'bg-danger' : '';
    
                    tableHtml += `<tr>
                        <td>${kode}</td>
                        <td>${nama}</td>
                        <td>${nilai}</td>
                        <td>${sumber}</td>
                        <td>${kecamatan}</td>
                        <td>${tingkatan}</td>
                        <td>${keterangan}</td>
                    </tr>`;
    
                        if (kode === 'Kode Indikator tidak ada' || nama === 'Nama Indikator tidak ada' || nilai === 'Nilai tidak ada' || sumber === 'Sumber data tidak ada' || kecamatan === 'Kecamatan data tidak ada') {
                        hasNullData = true;
                    }
                }
    
                    tableHtml += '</tbody></table>';
                    content.innerHTML += tableHtml;
    
                    if (hasNullData) {
                        $('#btn_modal_close_footer').hide();
                        $('#simpan').hide();
                        $('#tahunBtn').hide();
                        $('#perbaiki').show();
                    } else if (tahun == '') {
                        $('#btn_modal_close_footer').hide();
                        $('#simpan').hide();
                        $('#tahunBtn').show();
                        $('#perbaiki').hide();
                    } else {
                        $('#simpan').show();
                        $('#perbaiki').hide();
                    }
                };
                reader.readAsArrayBuffer(file);
            }
    
            $('#filePreviewModal').modal('show');
        }
    </script>
    
@endsection
