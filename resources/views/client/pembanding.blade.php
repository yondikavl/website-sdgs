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
            align-items: center;
            justify-content: center;
        }

        .modal-content {
            background-color: #fefefe;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
            max-width: 800px; /* Max width to avoid overfitting */
            max-height: 90%; /* Max height to avoid overflow */
            overflow-y: auto; /* Enable vertical scrolling if content overflows */
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
            <button id="openComparisonModal" class="btn btn-primary ms-auto">Bandingkan</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Jenis Data</th>
                        <th>Satuan</th>
                        @php
                            $latestPencapaianYear = $indikators->first()->pencapaian->sortByDesc('tahun')->first();
                            $secondLatestPencapaianYear = $indikators->first()->pencapaian->sortByDesc('tahun')->skip(1)->first();
                        @endphp
                        <th>{{ $latestPencapaianYear->tahun ?? '-' }}</th>
                        <th>{{ $secondLatestPencapaianYear->tahun ?? '-' }}</th>
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
        <h3 class="justify-content-center d-flex">Perbandingan Data Indikator</h3>
        
        <!-- Selection Dropdowns inside Modal -->
        <div>
            <label for="indicator1">Pilih Indikator 1:</label>
            <select class="form-control rounded-2" id="indicator1">
                @foreach ($indikators as $indikator)
                    <option value="{{ $indikator->id }}">{{ $indikator->nama_indikator }}</option>
                @endforeach
            </select>

            <label for="indicator2">Pilih Indikator 2:</label>
            <select class="form-control rounded-2" id="indicator2">
                @foreach ($indikators as $indikator)
                    <option value="{{ $indikator->id }}">{{ $indikator->nama_indikator }}</option>
                @endforeach
            </select>

            <button class="mt-2 btn btn-primary" id="generateComparison">Bandingkan</button>
        </div>
        
        <canvas id="comparisonChart"></canvas>
    </div>
</div>
@endsection

@section('script')
<script>
    const data = @json($indikators);

    function getSelectedIndikators(data, indikator1Id, indikator2Id) {
        const indikator1 = data.find(item => item.id == indikator1Id);
        const indikator2 = data.find(item => item.id == indikator2Id);
        return [indikator1, indikator2];
    }

    document.addEventListener('DOMContentLoaded', (event) => {
        const indicator1Select = document.getElementById('indicator1');
        const indicator2Select = document.getElementById('indicator2');
        const generateButton = document.getElementById('generateComparison');
        const modal = document.getElementById('comparisonModal');
        const closeButton = document.querySelector('.close');

        generateButton.addEventListener('click', () => {
            const indikator1Id = indicator1Select.value;
            const indikator2Id = indicator2Select.value;
            const [indikator1, indikator2] = getSelectedIndikators(data, indikator1Id, indikator2Id);

            if (indikator1 && indikator2) {
                const combinedData = [...indikator1.pencapaian, ...indikator2.pencapaian];
                combinedData.sort((a, b) => a.tahun - b.tahun);
                
                const labels = [...new Set(combinedData.map(item => item.tahun))];

                const dataset1 = labels.map(year => {
                    const entry = indikator1.pencapaian.find(item => item.tahun === year);
                    return entry ? entry.persentase : null;
                });

                const dataset2 = labels.map(year => {
                    const entry = indikator2.pencapaian.find(item => item.tahun === year);
                    return entry ? entry.persentase : null;
                });

                var ctx = document.getElementById('comparisonChart').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                label: indikator1.nama_indikator,
                                data: dataset1,
                                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                                borderColor: 'rgba(75, 192, 192, 1)',
                                fill: false
                            },
                            {
                                label: indikator2.nama_indikator,
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
            } else {
                console.error('Data for the selected indicators is not available.');
            }
        });

        document.getElementById("openComparisonModal").onclick = function() {
            modal.style.display = "flex";
        };

        closeButton.onclick = function() {
            modal.style.display = "none";
        };

        // Close modal if user clicks outside of it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        };
    });
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
