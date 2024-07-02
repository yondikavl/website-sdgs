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
