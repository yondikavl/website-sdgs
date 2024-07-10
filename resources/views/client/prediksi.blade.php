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
                        <select class="form-control rounded-2" id="indikator_id" name="indikator_id" onchange="getKecamatan(this.value)">
                            <option value="">Pilih Indikator</option>
                        </select>
                    </div>

                    <!-- Kecamatan -->
                    <div class="form-group mx-3">
                        <label for="kecamatan_id" class="mr-2">{{ __('Kecamatan') }}</label>
                        <select class="form-control rounded-2" id="kecamatan_id" name="kecamatan_id" onchange="updateChartAndTable()">
                            <option value="">Pilih Kecamatan</option>
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-statistics"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function getIndikator(tujuanId) {
        $('#indikator_id').empty().append('<option value="">Pilih Indikator</option>');
        $.ajax({
            type: 'GET',
            url: "{{ route('get-prediksi-indikator', '') }}" + '/' + tujuanId,
            success: function(response) {
                response.forEach(element => {
                    $('#indikator_id').append(`<option value="${element['kode_indikator']}">${element['kode_indikator']}. ${element['nama_indikator']}</option>`);
                });
                if (response.length > 0) {
                    $('#indikator_id').val(response[0].kode_indikator).trigger('change');
                }
            }
        });
    }

    function getKecamatan(indikatorId) {
        $.ajax({
            url: "{{ route('get-kecamatan') }}",
            type: 'GET',
            data: { indikator_id: indikatorId },
            success: function(response) {
                var kecamatanSelect = $('#kecamatan_id');
                kecamatanSelect.empty().append('<option value="">Pilih Kecamatan</option>');
                response.kecamatans.forEach(kecamatan => {
                    kecamatanSelect.append('<option value="' + kecamatan.id + '">' + kecamatan.name + '</option>');
                });
                updateChartAndTable(indikatorId);
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    }

    function predictData(data, years) {
        var x = data.map((_, i) => i);
        var regression = ss.linearRegression(x.map((d, i) => [d, data[i]]));
        var line = ss.linearRegressionLine(regression);
        return Array.from({ length: years }, (_, i) => Math.min(100, Math.max(0, line(data.length + i))));
    }

    function updateChartAndTable() {
        var indikatorId = $('#indikator_id').val();
        var kecamatanId = $('#kecamatan_id').val();

        if (!indikatorId || !kecamatanId) return;

        $.ajax({
            type: 'GET',
            url: "{{ route('get-prediksi-data', ['indikatorId' => ':indikatorId', 'kecamatanId' => ':kecamatanId']) }}"
                .replace(':indikatorId', indikatorId)
                .replace(':kecamatanId', kecamatanId),
            success: function(response) {
                var labels = response.labels;
                var historicalData1 = response.historicalData1;
                var historicalData2 = response.historicalData2;
                var historicalData3 = response.historicalData3;

                var predictedData1 = predictData(historicalData1, 6);
                var predictedData2 = predictData(historicalData2, 6);
                var predictedData3 = predictData(historicalData3, 6);

                var predictedYears = labels.slice(-6).map(year => parseInt(year) + 1);

                var tableBody = $('#dataTable tbody');
                tableBody.empty();
                predictedYears.forEach((year, index) => {
                    tableBody.append(`
                        <tr>
                            <td>${year}</td>
                            <td>${predictedData1[index].toFixed(2)}%</td>
                            <td>${predictedData2[index].toFixed(2)}%</td>
                            <td>${predictedData3[index].toFixed(2)}%</td>
                        </tr>
                    `);
                });

                myChart.data.labels = labels.concat(predictedYears);
                myChart.data.datasets = [
                    { label: 'SD/Sederajat', data: historicalData1.concat(predictedData1), borderColor: 'rgba(75, 192, 192, 1)', borderWidth: 2, fill: false },
                    { label: 'SMP/Sederajat', data: historicalData2.concat(predictedData2), borderColor: 'rgba(54, 162, 235, 1)', borderWidth: 2, fill: false },
                    { label: 'SMA/Sederajat', data: historicalData3.concat(predictedData3), borderColor: 'rgba(255, 206, 86, 1)', borderWidth: 2, fill: false }
                ];
                myChart.update();
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    }

    $(document).ready(function() {
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, { type: 'line', data: { labels: [], datasets: [] }, options: { scales: { y: { beginAtZero: true, min: 0, max: 100 } } } });

        $('#indikator_id').change(function() {
            getKecamatan($(this).val());
        });

        $('#kecamatan_id').change(updateChartAndTable);
    });
</script>
@endsection



