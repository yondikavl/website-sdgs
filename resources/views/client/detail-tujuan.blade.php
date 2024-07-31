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
        background-color: rgba(0, 0, 0, 0.4); /* Adjusted opacity */
        overflow: auto; /* Enable scrolling if needed */
    }

    .modal-content {
        background-color: #fff;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 60%;
        position: relative;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3); /* Added shadow */
        border-radius: 10px; /* Added rounded corners */
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

    .table-container img {
        max-width: 100%;
        display: block;
        margin: 0 auto;
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
                                <th>Rumus</th>
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
                                    <td>
                                        <button data-bs-toggle="modal" data-bs-target="#rumusModal{{ $indikator->id }}" class="btn btn-primary">
                                            <i class="fas fa-calculator"></i> Rumus
                                        </button>
                                        <!-- Modal -->
                                        <div id="rumusModal{{ $indikator->id }}" class="modal">
                                            <div class="modal-content">
                                                <span class="close" data-modal-id="rumusModal{{ $indikator->id }}">&times;</span>
                                                <div class="table-container">
                                                    <img src="{{ asset('assets/img/' . $indikator->rumus) }}" alt="Rumus" style="max-width: 100%;">
                                                </div>
                                            </div>
                                        </div>
                                    </td>                                    
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
        });

        document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.modal .close').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var modalId = btn.getAttribute('data-modal-id');
                document.getElementById(modalId).style.display = 'none';
            });
        });

        document.querySelectorAll('button[data-bs-toggle="modal"]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                var target = document.querySelector(btn.getAttribute('data-bs-target'));
                if (target) {
                    target.style.display = 'block';
                }
            });
        });

        window.onclick = function (event) {
            if (event.target.classList.contains('modal')) {
                event.target.style.display = 'none';
            }
        };
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
