@extends('layouts.client.app')

@section('title', 'Analisis Pembanding')

@section('style')
    <style>
        .container {
            width: 90%;
            margin: 15px auto;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 99;
            left: 0;
            top: 0;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        @media (max-width: 768px) {
            .container {
                width: 100%;
            }
        }
    </style>

@endsection

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <h1 class="text-center font-weight-bold mb-5">Analisis Pembanding SDGs Kota Bandar Lampung</h1>
            </div>
        </div>
    </div>

    <div class="container row my-5">
        <div class="col-lg-12 d-flex align-items-center">
            <form class="form-inline">
                <!-- Tujuan -->
                <div class="form-group">
                    <label for="tujuan_id" class="mr-2">{{ __('Tujuan') }}</label>
                    <select class="form-control rounded-2" name="tujuan_id" id="tujuan_id" onchange="" required>
                        <option value="">Pilih Tujuan</option>
                        {{-- @foreach ($tujuans as $tujuan) --}}
                        <option value="">Tujuan 1</option>
                        <option value="">Tujuan 2</option>
                        {{-- @endforeach --}}
                    </select>
                </div>
            </form>
        </div>
    </div>

    <div class="container card">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Jenis Data</th>
                        <th>Satuan</th>
                        {{-- get 2 tahun terakhir --}}
                        <th>2023</th>
                        <th>2024</th>
                        <th>Perangkat Daerah</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($indikators as $indikator)
                        <tr>
                            <td>{{ $indikator->kode_indikator }}</td>
                            <td>{{ $indikator->nama_indikator }}</td>
                            <td>{{ $indikator->pencapaian->where('tahun', date('Y') - 1)->first()->tipe ?? '-' }}</td>
                            <td>
                                {{ $indikator->pencapaian->where('tahun', date('Y') - 1)->first()->persentase ?? '-' }}
                            </td>
                            <td>
                                {{ $indikator->pencapaian->where('tahun', date('Y'))->first()->persentase ?? '-' }}
                            </td>

                            <td>{{ $indikator->pencapaian->where('tahun', date('Y') - 1)->first()->sumber_data ?? '-' }}
                            </td>
                            <td>
                                <div class="btn btn-primary modal-btn" onclick="showGrafik({{ $indikator->id }});">Detail
                                </div>
                                <div id="myModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <h3>Grafik Pencapaian</h3>
                                        <canvas id="grafik"></canvas>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach --}}
                </tbody>
            </table>

        </div>
        <!-- /.card-body -->
    </div>
@endsection

@section('script')
    <script>
        var modal = document.getElementById("myModal");
        var closeButton = document.getElementsByClassName("close")[0];


        closeButton.onclick = function() {
            modal.style.display = "none";
        };
    </script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": true,
                "buttons": ["csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endsection
