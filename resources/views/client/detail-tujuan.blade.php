@extends('layouts.client.app')

@section('title', 'Detail Tujuan')

@section('style')
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 99;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
            position: relative;
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

        .table-container {
            overflow-x: auto;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table th {
            background-color: #f2f2f2;
        }

        @media(max-width: 1024px) {
            .modal-content {
                width: 80%;
            }
        }

        @media(max-width: 768px) {
            .modal-content {
                width: 90%;
            }
        }
    </style>
@endsection

@section('content')

    @include('layouts.client.sdgs')

    <div class="container">
        <div class="card text-center">
            <div class="card-body">
                <h2>{{ $tujuan->nama_tujuan }}</h2>
                <img src="{{ asset('assets/ikon/' . $tujuan->ikon_tujuan) }}" width="100" alt="" class="py-3">
                <p>{{ $tujuan->deskripsi_tujuan }}</p>
                <button id="rumusBtn" class="btn btn-primary">
                    <i class="fas fa-calculator"></i> Rumus Perhitungan
                </button>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ __('Tabel Data Indikator') }}</h3>
            </div>
            <div class="card-body">
                <div class="table-container">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>Jenis Data</th>
                                @for ($year = 2018; $year <= 2030; $year++)
                                    <th>{{ $year }}</th>
                                @endfor
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($indikators as $indikator)
                                <tr>
                                    <td>{{ $indikator->kode_indikator }}</td>
                                    <td>{{ $indikator->nama_indikator }}</td>
                                    @for ($year = 2018; $year <= 2030; $year++)
                                        <td>{{ $pencapaians[$indikator->id][$year] }}</td>
                                    @endfor
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="rumusModal" class="modal">
        <div class="container modal-content col-12">
            <span class="close mb-4">&times;</span>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tujuan</th>
                            <th>Kode Indikator</th>
                            <th>Indikator</th>
                            <th>Rumus</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tujuan 1</td>
                            <td>Kode 1</td>
                            <td>Indikator 1</td>
                            <td>Rumus 1</td>
                            <td>Keterangan 1</td>
                        </tr>
                        <tr>
                            <td>Tujuan 2</td>
                            <td>Kode 2</td>
                            <td>Indikator 2</td>
                            <td>Rumus 2</td>
                            <td>Keterangan 2</td>
                        </tr>
                        <tr>
                            <td>Tujuan 3</td>
                            <td>Kode 3</td>
                            <td>Indikator 3</td>
                            <td>Rumus 3</td>
                            <td>Keterangan 3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": false,
                "lengthChange": false,
                "autoWidth": false,
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

        // Modal functionality
        var modal = document.getElementById("rumusModal");
        var btn = document.getElementById("rumusBtn");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
            modal.style.display = "block";
        }

        span.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
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
