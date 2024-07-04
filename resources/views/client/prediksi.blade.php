@extends('layouts.client.app')

@section('title', 'Prediksi')

@section('style')
    <style>
        .container {
            width: 90%;
            margin: 15px auto;
        }

        h2 {
            text-align: center;
        }

        @media (max-width: 768px) {
            .container {
                width: 100%;
            }

            #myChart {
                width: 100%;
                height: 400px;
            }

            select {
                width: 100%;
            }
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
@endsection

@section('content')
    <div class="col-12">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <h1 class="text-center font-weight-bold mb-5">Prediksi SDGs Kota Bandar Lampung</h1>
                </div>
            </div>
        </div>

        <div class="container row my-5">
            <div class="d-flex align-items-center">
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

                    <!-- Indikator -->
                    <div class="form-group mx-3">
                        <label for="indikator_id" class="mr-2">{{ __('Indikator') }}</label>
                        <select class="form-control rounded-2" id="indikator_id" name="indikator_id" onchange="">
                            <option value="">Pilih Indikator</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>

        <div class="container mb-5">
            <p class="my-4 text-center text-lg">Prediksi data indikator <span class="text-bold">4.1.2 Tingkat penyelesaian
                    pendidikan
                    jenjang
                    SD/sederajat,
                    SMP/sederajat, dan SMA/sederajat.</span></p>
            <div class="text-left my-5">
                <label for="lineSelector" class="mr-2">Garis yang ingin ditampilkan:</label>
                <select id="lineSelector" class="form-control d-inline-block w-auto">
                    <option value="all">Semua Garis</option>
                    <option value="0">Tingkat penyelesaian pendidikan di jenjang SD/Sederajat</option>
                    <option value="1">Tingkat penyelesaian pendidikan di jenjang SMP/Sederajat</option>
                    <option value="2">Tingkat penyelesaian pendidikan di jenjang SMA/Sederajat</option>
                </select>
            </div>
            <canvas id="myChart"></canvas>
        </div>

        <div class="container mb-5">
            <h2 class="text-center">Table Data Prediksi</h2>
            <table id="dataTable">
                <thead>
                    <tr>
                        <th>Tahun</th>
                        <th>SD/Sederajat</th>
                        <th>SMP/Sederajat</th>
                        <th>SMA/Sederajat</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Rows will be dynamically added here -->
                </tbody>
            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-statistics"></script>
    </div>
@endsection

@section('script')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('myChart').getContext('2d');

            var historicalData1 = [96, 98, 97, 98, 99, 99];
            var historicalData2 = [95, 98, 96, 97, 96, 97];
            var historicalData3 = [95, 94, 95, 94, 95, 95];
            var labels = ['2019', '2020', '2021', '2022', '2023', '2024'];

            function predictData(data, years) {
                var x = [];
                var y = data;
                for (var i = 0; i < y.length; i++) {
                    x.push(i);
                }
                var regression = ss.linearRegression(x.map(function(d, i) {
                    return [d, y[i]];
                }));
                var line = ss.linearRegressionLine(regression);

                var predictedData = [];
                for (var i = y.length; i < y.length + years; i++) {
                    var prediction = line(i);
                    prediction = Math.min(100, Math.max(0,
                        prediction)); // memastikan nilai prediksi berada di antara 0 dan 100
                    predictedData.push(prediction);
                }
                return predictedData;
            }

            // Data prediksi 6 tahun ke depan (2025-2030)
            var predictedData1 = predictData(historicalData1, 6);
            var predictedData2 = predictData(historicalData2, 6);
            var predictedData3 = predictData(historicalData3, 6);
            var forecastLabels = labels.concat(['2025', '2026', '2027', '2028', '2029', '2030']);

            // Menggabungkan data historis dan prediksi
            var combinedData1 = historicalData1.concat(predictedData1);
            var combinedData2 = historicalData2.concat(predictedData2);
            var combinedData3 = historicalData3.concat(predictedData3);

            var datasets = [{
                    label: 'Tingkat penyelesaian pendidikan di jenjang SD/Sederajat',
                    data: combinedData1,
                    borderColor: "rgba(75, 192, 192, 1)",
                    backgroundColor: "rgba(75, 192, 192, 0.2)",
                    fill: false
                },
                {
                    label: 'Tingkat penyelesaian pendidikan di jenjang SMP/Sederajat',
                    data: combinedData2,
                    borderColor: "rgba(255, 99, 132, 1)",
                    backgroundColor: "rgba(255, 99, 132, 0.2)",
                    fill: false
                },
                {
                    label: 'Tingkat penyelesaian pendidikan di jenjang SMA/Sederajat',
                    data: combinedData3,
                    borderColor: "rgba(54, 162, 235, 1)",
                    backgroundColor: "rgba(54, 162, 235, 0.2)",
                    fill: false
                }
            ];

            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: forecastLabels,
                    datasets: datasets
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            min: 0,
                            max: 100
                        }
                    },
                }
            });

            document.getElementById('lineSelector').addEventListener('change', function() {
                var selectedIndex = this.value;
                if (selectedIndex === 'all') {
                    myChart.data.datasets = datasets;
                } else {
                    myChart.data.datasets = [datasets[selectedIndex]];
                }
                myChart.update();
            });

            function updateTable() {
                var tableBody = document.querySelector('#dataTable tbody');
                tableBody.innerHTML = '';

                for (var i = 0; i < forecastLabels.length; i++) {
                    var row = '<tr>' +
                        '<td>' + forecastLabels[i] + '</td>' +
                        '<td>' + (combinedData1[i] !== undefined ? combinedData1[i].toFixed(2) : '-') + '</td>' +
                        '<td>' + (combinedData2[i] !== undefined ? combinedData2[i].toFixed(2) : '-') + '</td>' +
                        '<td>' + (combinedData3[i] !== undefined ? combinedData3[i].toFixed(2) : '-') + '</td>' +
                        '</tr>';
                    tableBody.innerHTML += row;
                }
            }

            updateTable();
        });
    </script>
@endsection
