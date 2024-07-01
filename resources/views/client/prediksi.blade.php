@extends('layouts.client.app')

@section('title', 'Prediksi')

@section('style')
    <style>
        .container {
            width: 80%;
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
        <div class="container">
            <label for="tujuan-select">Tujuan:</label>
            <select class="rounded-lg px-2 py-1" id="tujuan-select">
                <option value="tujuan1">tujuan1</option>
                <option value="tujuan2">tujuan2</option>
            </select>

            <label for="indikator-select" class="ml-5">Indikator:</label>
            <select class="rounded-lg px-2 py-1" id="indikator-select">
                <option value="tujuan1">indikator1</option>
                <option value="tujuan2">indikator2</option>
            </select>
        </div>
        <div class="container mb-5">
            <canvas id="myChart" width="400" height="200"></canvas>
        </div>

        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </div>
@endsection

@section('script')
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: generateMonthlyLabels(),
                    datasets: [{
                        label: '1.1.1 Tingkat Kemiskinan',
                        data: [60, 70, 80, 70, 10, 80, 70, 90, 80, 70, 60, 70],
                        backgroundColor: "rgba(25,255,51,0.6)"
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    }
                }
            });
        });

        function generateMonthlyLabels() {
            return ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        }
    </script>
@endsection
