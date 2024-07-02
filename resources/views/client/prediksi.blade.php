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
    </div>
@endsection

@section('script')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('myChart').getContext('2d');

            // Data historis (2019-2024)
            var historicalData = [60, 70, 80, 70, 80, 75];
            var labels = ['2019', '2020', '2021', '2022', '2023', '2024'];

            // Fungsi untuk memprediksi data 5 tahun ke depan
            function predictData(data, years) {
                var growthRate = (data[data.length - 1] - data[0]) / data.length;
                var predictedData = [...data];
                for (var i = 1; i <= years; i++) {
                    predictedData.push(predictedData[predictedData.length - 1] + growthRate);
                }
                return predictedData.slice(data.length);
            }

            // Data prediksi 5 tahun ke depan (2025-2029)
            var predictedData = predictData(historicalData, 6);
            var forecastLabels = labels.concat(['2025', '2026', '2027', '2028', '2029', '2030']);

            // Menggabungkan data historis dan prediksi
            var combinedData = historicalData.concat(predictedData);

            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: forecastLabels,
                    datasets: [{
                        label: '1.1.1 Tingkat Kemiskinan',
                        data: combinedData,
                        borderColor: "rgba(75, 192, 192, 1)",
                        backgroundColor: "rgba(75, 192, 192, 0.2)",
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    },
                }
            });
        });
    </script>
@endsection
