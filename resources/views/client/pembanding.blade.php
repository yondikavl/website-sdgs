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
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">{{ __('Tabel Data Indikator') }}</h3>
            <button id="pembanding" class="btn btn-primary ms-auto">Bandingkan</button>
        </div>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($indikators as $indikator)
                        @php
                            $latestPencapaian = $indikator->pencapaian->sortByDesc('tahun')->first();
                            $secondLatestPencapaian = $indikator->pencapaian->sortByDesc('tahun')->skip(1)->first();
                        @endphp
                        <tr>
                            <td>{{ $indikator->kode_indikator }}</td>
                            <td>{{ $indikator->nama_indikator }}</td>
                            <td>{{ $latestPencapaian->tipe ?? '-' }}</td>
                            <td>{{ $latestPencapaian->persentase ?? '-' }}</td>
                            <td>{{ $secondLatestPencapaian->persentase ?? '-' }}</td>
                            <td>{{ $latestPencapaian->sumber_data ?? '-' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal for Comparison -->
    <div id="comparisonModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3>Perbandingan Data Indikator</h3>
            <canvas id="comparisonChart"></canvas>
        </div>
    </div>

@endsection

@section('script')
    <script>
        var data = {!! json_encode($pencapaians) !!};

        function getRandomIndikators(data) {
            const keys = Object.keys(data);
            const randomIndices = [];
            while (randomIndices.length < 2) {
                const randomIndex = Math.floor(Math.random() * keys.length);
                if (!randomIndices.includes(randomIndex)) {
                    randomIndices.push(randomIndex);
                }
            }
            return randomIndices.map(index => data[keys[index]]);
        }

        function showComparisonModal() {
            var modal = document.getElementById("comparisonModal");
            var comparisonData = getRandomIndikators(data);

            var labels = comparisonData[0][Object.keys(comparisonData[0])[0]].map(item => item.tahun);
            var dataset1 = comparisonData[0][Object.keys(comparisonData[0])[0]].map(item => item.persentase);
            var dataset2 = comparisonData[1][Object.keys(comparisonData[1])[0]].map(item => item.persentase);

            var ctx = document.getElementById('comparisonChart').getContext('2d');
            new Chart(ctx, {
                type: 'line',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: 'Indikator 1',
                            data: dataset1,
                            backgroundColor: 'rgba(75, 192, 192, 0.6)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            fill: false
                        },
                        {
                            label: 'Indikator 2',
                            data: dataset2,
                            backgroundColor: 'rgba(153, 102, 255, 0.6)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            fill: false
                        }
                    ]
                },
                options: {
                    responsive: true,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

            modal.style.display = "block";
        }

        document.getElementById("pembanding").onclick = showComparisonModal;
        document.getElementsByClassName("close")[0].onclick = function() {
            document.getElementById("comparisonModal").style.display = "none";
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
