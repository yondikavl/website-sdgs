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
            border: 1px solid green;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #28a745;
            color: white;
        }

        tr:nth-child(odd) {
            background-color: white;
        }

        tr:nth-child(even) {
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

        <div class="container my-5">
            <div class="d-flex align-items-center justify-content-center">
                <form class="form-inline">
                    <!-- Tujuan -->
                    <div class="form-group m-2">
                        <label for="tujuan_id" class="mr-2 d-flex"
                            style="min-width: 100px; max-width: 100px;">{{ __('Tujuan') }}</label>
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
                    <div class="form-group m-2">
                        <label for="indikator_id" class="mr-2 d-flex"
                            style="min-width: 100px; max-width: 100px;">{{ __('Indikator') }}</label>
                        <select class="form-control rounded-2" id="indikator_id" name="indikator_id"
                            onchange="getKecamatan(this.value)">
                            <option value="">Pilih Indikator</option>
                        </select>
                    </div>

                    <!-- Kecamatan -->
                    <div class="form-group m-2">
                        <label for="kecamatan_id" class="mr-2 d-flex"
                            style="min-width: 100px; max-width: 100px;">{{ __('Kecamatan') }}</label>
                        <select class="form-control rounded-2" id="kecamatan_id" name="kecamatan_id"
                            onchange="updateChartAndTable()">
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

        <h2 class="text-center">Table Data Prediksi</h2>
        <div class="container mb-5 table-responsive">
            <table id="dataTable" style="border: 0;">
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
                        let namaIndikator = element['nama_indikator'];
                        if (namaIndikator.length > 30) {
                            namaIndikator = namaIndikator.substring(0, 30) + '...';
                        }
                        $('#indikator_id').append(
                            `<option value="${element['kode_indikator']}">${element['kode_indikator']}. ${namaIndikator}</option>`
                        );
                    });
                    if (response.length > 0) {
                        $('#indikator_id').val(response[0].kode_indikator).trigger('change');
                    }
                }
            });
        }


        function getKecamatan(indikatorId) {
            // console.log('Indikator ID:', indikatorId); // Debugging
            $.ajax({
                url: "{{ route('get-kecamatan') }}",
                type: 'GET',
                data: {
                    indikator_id: indikatorId
                },
                success: function(response) {
                    var kecamatanSelect = $('#kecamatan_id');
                    kecamatanSelect.empty().append('<option value="">Pilih Kecamatan</option>');
                    response.kecamatans.forEach(kecamatan => {
                        kecamatanSelect.append('<option value="' + kecamatan.id + '">' + kecamatan
                            .name + '</option>');
                    });
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        }

        function predictData(data, startYear, endYear) {
            var x = data.map((_, i) => i);
            var regression = ss.linearRegression(x.map((d, i) => [d, data[i]]));
            var line = ss.linearRegressionLine(regression);
            var years = endYear - startYear + 1;
            return Array.from({
                length: years
            }, (_, i) => Math.min(100, Math.max(0, line(data.length + i))));
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
                    if (!response || !response.labels || !response.historicalData || !response.tingkatans) {
                        console.error("Data tidak lengkap atau format tidak sesuai.");
                        return;
                    }

                    var labels = response.labels;
                    var historicalData = response.historicalData;
                    var tingkatans = response.tingkatans;

                    var datasets = [];
                    var tableBody = $('#dataTable tbody');
                    var tableHead = $('#dataTable thead');
                    tableBody.empty();
                    tableHead.empty();

                    var startYear = parseInt(labels[labels.length - 1]) + 1;
                    var endYear = 2030;
                    var predictedYears = Array.from({
                        length: endYear - startYear + 1
                    }, (_, i) => startYear + i);

                    // Build table header
                    var headerRow = '<tr><th>Tahun</th>';
                    tingkatans.forEach(tingkatan => {
                        headerRow += `<th>${tingkatan}/Sederajat</th>`;
                    });
                    headerRow += '</tr>';
                    tableHead.append(headerRow);

                    // Add historical data to table
                    labels.forEach((year, index) => {
                        var row = `<tr><td>${year}</td>`;
                        tingkatans.forEach(tingkatan => {
                            row += `<td>${historicalData[tingkatan][index].toFixed(2)}%</td>`;
                        });
                        row += '</tr>';
                        tableBody.append(row);
                    });

                    tingkatans.forEach(tingkatan => {
                        var historicalDataForTingkatan = historicalData[tingkatan].map(parseFloat);
                        var predictedData = predictData(historicalDataForTingkatan, startYear, endYear);

                        datasets.push({
                            label: tingkatan + '/Sederajat',
                            data: historicalDataForTingkatan.concat(predictedData),
                            borderColor: getRandomColor(),
                            borderWidth: 2,
                            fill: false
                        });

                        predictedYears.forEach((year, index) => {
                            var row = tableBody.find(`tr:contains(${year})`);
                            if (row.length === 0) {
                                row = $('<tr>').appendTo(tableBody);
                                row.append(`<td>${year}</td>`);
                            }
                            row.append(`<td>${predictedData[index].toFixed(2)}%</td>`);
                        });
                    });

                    window.myChart.data.labels = labels.concat(predictedYears);
                    window.myChart.data.datasets = datasets;
                    window.myChart.update();
                },
                error: function(xhr) {
                    console.error(xhr.responseText);
                }
            });
        }

        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }


        $(document).ready(function() {
            var ctx = document.getElementById('myChart').getContext('2d');
            window.myChart = new Chart(ctx, {
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
                    }
                }
            });

            $('#indikator_id').change(function() {
                getKecamatan($(this).val());
            });

            $('#kecamatan_id').change(updateChartAndTable);
        });
    </script>
@endsection
