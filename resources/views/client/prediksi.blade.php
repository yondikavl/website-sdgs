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
                    <div class="form-group mx-3">
                        <label for="tujuan_id" class="mr-2">{{ __('Tujuan') }}</label>
                        <select class="form-control rounded-2" name="tujuan_id" id="tujuan_id"
                            onchange="getIndikator(this.value)" required>
                            <option value="">Pilih Peta Tujuan</option>
                            @foreach ($tujuans as $tujuan)
                                <option value="{{ $tujuan->id }}">{{ $tujuan->id }}. {{ $tujuan->nama_tujuan }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Indikator -->
                    <div class="form-group mx-3">
                        <label for="indikator_id" class="mr-2">{{ __('Indikator') }}</label>
                        <select class="form-control rounded-2" id="indikator_id" name="indikator_id" onchange="updateChartAndTable(this.value)">
                            <option value="">Pilih Indikator</option>
                        </select>
                    </div>
                </form>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center mx-auto mt-3">
            <h3 class="mt-3">
                <p>Prediksi data indikator yang dipilih: <span id="indikator_value"></span></p>
            </h3>
        </div>

        <div class="container mb-5">

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function getIndikator(tujuanId) {
            $('#indikator_id').empty();
            $('#indikator_id').append(`<option value="">Pilih Indikator</option>`);
            $.ajax({
                type: 'GET',
                url: "{{ route('get-prediksi-indikator', '') }}" + '/' + tujuanId,
                success: function(response) {
                    response.forEach(element => {
                        $('#indikator_id').append(
                            `<option value="${element['kode_indikator']}">${element['kode_indikator']}. ${element['nama_indikator']}</option>`
                        );
                    });

                    // Select the first available indicator by default
                    if (response.length > 0) {
                        $('#indikator_id').val(response[0].kode_indikator).trigger('change');
                    }
                }
            });
        }

        document.addEventListener('DOMContentLoaded', function() {
            var ctx = document.getElementById('myChart').getContext('2d');

            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [],
                    datasets: []
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
                    prediction = Math.min(100, Math.max(0, prediction)); // memastikan nilai prediksi berada di antara 0 dan 100
                    predictedData.push(prediction);
                }
                return predictedData;
            }

            function updateChartAndTable(indikatorId) {
                if (!indikatorId) return;
                console.log(indikatorId);

                $.ajax({
                    type: 'GET',
                    url: "{{ route('get-prediksi-data', '') }}" + '/' + indikatorId,
                    success: function(response) {
                        console.log(response.pencapaians)
                        // Track unique 'tingkatan' values
                    var uniqueTingkatan = [];
                    var uniqueTahun = [];

                    var tingkatanData = [];
                    var tahunData = [];

                    var persentaseData = [];

                    // Iterate through pencapaians data and log unique 'tingkatan'
                    response.pencapaians.forEach(function(pencapaian, index) {
                        var persentase = pencapaian.persentase
                        var tingkatan = pencapaian.tingkatan;
                        if (!uniqueTingkatan[tingkatan]) {
                            uniqueTingkatan[tingkatan] = true;
                            tingkatanData.push(tingkatan);
                            // console.log(`Item ${index + 1} - Tingkatan:`, tingkatan);
                        }
                        var tahun = pencapaian.tahun;
                        if (!uniqueTahun[tahun]) {
                            uniqueTahun[tahun] = true;
                            tahunData.push(tahun);
                            // console.log(`Item ${index + 1} - Tahun:`, tahun);
                        }
                    });
                    
                    
                    console.log(tingkatanData);
                    console.log(tahunData);


                        var historicalData1 = response.historicalData1;
                        var historicalData2 = response.historicalData2;
                        var historicalData3 = response.historicalData3;
                        var labels = response.labels;

                        var predictedData1 = predictData(historicalData1, 6);
                        var predictedData2 = predictData(historicalData2, 6);
                        var predictedData3 = predictData(historicalData3, 6);
                        var forecastLabels = labels.concat(['2025', '2026', '2027', '2028', '2029', '2030']);

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

                        myChart.data.labels = forecastLabels;
                        myChart.data.datasets = datasets;
                        myChart.update();

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

                        var selectedText = $("#indikator_id option:selected").text();
                        $('#indikator_value').text(selectedText);
                    }
                });
            }

            document.querySelectorAll('#lineSelector input[type="checkbox"]').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    var checkboxes = document.querySelectorAll('#lineSelector input[type="checkbox"]');
                    var selectedDatasets = [];

                    checkboxes.forEach((checkbox, index) => {
                        if (checkbox.checked) {
                            selectedDatasets.push(myChart.data.datasets[index]);
                        }
                    });

                    myChart.data.datasets = selectedDatasets;
                    myChart.update();
                });
            });

            $('#indikator_id').on('change', function() {
                updateChartAndTable(this.value);
            });
        });
    </script>
@endsection
