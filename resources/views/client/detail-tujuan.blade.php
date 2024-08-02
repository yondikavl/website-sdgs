@extends('layouts.client.app')

@section('title', 'Detail Tujuan')

@section('style')
    <style>
        .table-container {
            overflow-x: auto;
        }

        .table-container img {
            max-width: 100%;
            display: block;
            margin: 0 auto;
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

        .modal-dialog {
            max-width: 600px;
        }

        .modal-content {
            height: 400px;
        }

        .modal-body img {
            height: 280px;
            overflow: scroll;
            object-fit: contain;
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
                                        <button data-bs-toggle="modal" data-bs-target="#rumusModal{{ $indikator->id }}"
                                            class="btn btn-primary">
                                            <i class="fas fa-calculator"></i> Rumus
                                        </button>
                                        <div id="rumusModal{{ $indikator->id }}" class="modal fade" tabindex="-1"
                                            aria-labelledby="rumusModalLabel{{ $indikator->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="rumusModalLabel{{ $indikator->id }}">
                                                            <div class="font-weight-bold">Rumus</div>
                                                            <div class="text-sm">{{ $indikator->kode_indikator }} -
                                                                {{ $indikator->nama_indikator }}</div>
                                                        </h5>
                                                        <button type="button" class="btn-close border-0"
                                                            data-bs-dismiss="modal" aria-label="Close">❌</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="table-container">
                                                            <img src="{{ asset('assets/img/' . $indikator->rumus) }}"
                                                                alt="Rumus">
                                                        </div>
                                                    </div>
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
    </script>

    <!-- DataTables & Plugins -->
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
