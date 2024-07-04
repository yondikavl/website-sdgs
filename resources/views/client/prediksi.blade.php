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
            <canvas id="myChart"></canvas>
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

            // Data historis (2019-2024)
            var historicalData1 = [60, 70, 80, 70, 80, 75];
            var historicalData2 = [65, 75, 85, 75, 85, 80];
            var historicalData3 = [55, 65, 75, 65, 75, 70];
            var labels = ['2019', '2020', '2021', '2022', '2023', '2024'];

            // Fungsi untuk memprediksi data 6 tahun ke depan menggunakan regresi linier
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
                    predictedData.push(line(i));
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

            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: forecastLabels,
                    datasets: [{
                            label: '1.1.1 Tingkat Kemiskinan',
                            data: combinedData1,
                            borderColor: "rgba(75, 192, 192, 1)",
                            backgroundColor: "rgba(75, 192, 192, 0.2)",
                            fill: false
                        },
                        {
                            label: '1.2.1 Tingkat Pengangguran',
                            data: combinedData2,
                            borderColor: "rgba(255, 99, 132, 1)",
                            backgroundColor: "rgba(255, 99, 132, 0.2)",
                            fill: false
                        },
                        {
                            label: '1.3.1 Tingkat Pendidikan',
                            data: combinedData3,
                            borderColor: "rgba(54, 162, 235, 1)",
                            backgroundColor: "rgba(54, 162, 235, 0.2)",
                            fill: false
                        }
                    ]
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
        });
    </script>
@endsection
