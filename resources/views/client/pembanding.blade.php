@extends('layouts.client.app')

@section('title', 'Analisis Pembanding')

@section('style')
    <style>
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
    </style>

@endsection

@section('content')

    @include('layouts.client.pembanding')

    <div class="container card text-center rounded-lg">
        <div class="card-body">
            <h2>{{ $tujuan->nama_tujuan }}</h2>
            <img class="m-3" src="{{ asset('assets/ikon/' . $tujuan->ikon_tujuan) }}" width="100" alt="">
            <p>{{ $tujuan->deskripsi_tujuan }}</p>
        </div>
    </div>

    <div class="container card">
        <div class="card-header">
            <h3 class="card-title">{{ __('Tabel Data Indikator') }}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Jenis Data</th>
                        <th>Satuan</th>
                        <th>{{ $indikators->first()->pencapaian->sortByDesc('tahun')->first()->tahun }}</th>
                        <th>{{ $indikators->first()->pencapaian->sortByDesc('tahun')->skip(1)->first()->tahun }}</th>
                        <th>Perangkat Daerah</th>
                        <th>Grafik</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($indikators as $indikator)
                        <tr>
                            <td>{{ $indikator->kode_indikator }}</td>
                            <td>{{ $indikator->nama_indikator }}</td>
                            <td>{{ $indikator->pencapaian->sortByDesc('tahun')->first()->tipe ?? '-' }}</td>
                            <td>
                                {{ $indikator->pencapaian->sortByDesc('tahun')->first()->persentase ?? '-' }}
                            </td>
                            <td>
                                {{ $indikator->pencapaian->sortByDesc('tahun')->skip(1)->first()->persentase ?? '-' }}
                            </td>
                            <td>{{ $indikator->pencapaian->sortByDesc('tahun')->first()->sumber_data ?? '-' }}
                            </td>
                            <td>
                                <div class="btn btn-primary modal-btn"
                                    onclick="showGrafik({{ $indikator->id }});">Detail</div>
                                <div id="myModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <h3>Grafik Pencapaian</h3>
                                        <canvas id="grafik"></canvas>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    
    
@endsection

@section('script')
    <script>
        var data = {!! json_encode($pencapaians) !!};

        function showGrafik(sub_id) {
            var modal = document.getElementById("myModal");
            modal.style.display = "block";

            // Mencari data indikator yang dipilih
            var dataindikator = data.find(function(item) {
                return item[sub_id];
            });

            var dataTahun = [];
            var dataPencapaian = [];

            // Mencari data pencapaian dari indikator tersebut
            for (var i = 0; i < dataindikator[sub_id].length; i++) {
                dataTahun.push(dataindikator[sub_id][i].tahun);
                dataPencapaian.push(dataindikator[sub_id][i].persentase);
            }

            // Membuat grafik dimiulai dari 0 sampai nilai tertinggi
            var max = Math.max(...dataPencapaian);
            var min = Math.min(...dataPencapaian);
            var ctx = document.getElementById('grafik').getContext('2d');
            var grafik = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: dataTahun,
                    datasets: [{
                        label: 'Pencapaian',
                        data: dataPencapaian,
                        backgroundColor: 'rgba(75, 192, 192, 0.6)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true,
                            min: 0,
                            max: max + 10
                        }
                    }
                }
            });

        }
    </script>
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
