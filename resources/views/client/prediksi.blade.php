@extends('layouts.client.app')

@section('title', 'Prediksi')

@section('style')
    <style>
        .container {
            width: 90%;
        }

        .svg-atas {
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .svg-bawah {
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: -1;
            margin-bottom: 100px;
        }

        h2 {
            text-align: center;
            font-size: 20px;
        }

        .form-inline {
            background-color: #ffffff;
            border-radius: 12px;
        }

        label {
            min-width: 100px;
            max-width: 100px;
        }

        select {
            min-width: 200px;
            max-width: 200px;
        }

        select option {
            font-size: 12px;
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
            font-size: 12px;
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
    <div class="col-lg-12">
        <svg class="svg-atas" width="506" height="490" viewBox="0 0 506 490" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <circle opacity="0.2" cx="31.1897" cy="15.0955" r="374.775" stroke="url(#paint0_linear_1106_91)"
                stroke-width="200" />
            <defs>
                <linearGradient id="paint0_linear_1106_91" x1="572.332" y1="-121.159" x2="-343.585" y2="416.107"
                    gradientUnits="userSpaceOnUse">
                    <stop stop-color="green" stop-opacity="0.4" />
                    <stop offset="1" stop-color="green" stop-opacity="0.4" />
                </linearGradient>
            </defs>
        </svg>

        <div class="container pt-5">
            <div class="bg-primary my-5" style="border-radius: 12px;">
                <h1 class="text-center py-5 font-weight-bold text-xl">Prediksi SDGs Kota Bandar Lampung</h1>
            </div>

            <div class="card mb-5 py-4 bg-light" style=" border-radius: 12px;">
                <div class="card mx-3 d-flex align-items-center justify-content-center">
                    <form class="form-inline w-100 d-flex justify-content-around mx-3">
                        <!-- Tujuan -->
                        <div class="form-group m-2">
                            <label for="tujuan_id" class="mr-2 d-flex">{{ __('Tujuan') }}</label>
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
                            <label for="indikator_id" class="mr-2 d-flex">{{ __('Indikator') }}</label>
                            <select class="form-control rounded-2" id="indikator_id" name="indikator_id"
                                onchange="getKecamatan(this.value)">
                                <option value="">Pilih Indikator</option>
                            </select>
                        </div>

                        <!-- Kecamatan -->
                        <div class="form-group m-2">
                            <label for="kecamatan_id" class="mr-2 d-flex">{{ __('Kecamatan') }}</label>
                            <select class="form-control rounded-2" id="kecamatan_id" name="kecamatan_id"
                                onchange="updateChartAndTable()">
                                <option value="">Pilih Kecamatan</option>
                            </select>
                        </div>
                    </form>
                </div>

                <div class="d-flex justify-content-center align-items-center mx-auto mt-3">
                    <h3 class="mx-5 mt-3" id="indikator_name">
                        <p class="text-sm">Prediksi data indikator: <span id="indikator_value"></span></p>
                    </h3>
                </div>

                <div class="container mb-5">
                    <canvas id="myChart"></canvas>
                </div>

                <div class="container mb-3 d-flex align-items-center p-2 rounded-lg" style="background-color: #ece2bf">
                    <i class="fas fa-info-circle mr-2" style="color: black;"></i>
                    <div class="text-muted" style="font-size: 12px; color: black;">
                        Prediksi yang ditampilkan adalah hasil analisis data historis dan hanya bersifat sebagai perkiraan.
                        Hasil
                        sebenarnya dapat bervariasi.
                    </div>
                </div>
            </div>

            <div class="card p-4 bg-light" style=" border-radius: 12px;">
                <h2 class="text-center mb-3">Table Data Prediksi</h2>
                <div class="mb-5 table-responsive mx-auto">
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
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-statistics"></script>
    </div>

    <svg class="svg-bawah" width="476" height="476" viewBox="0 0 476 476" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <circle opacity="0.2" cx="475.274" cy="475.408" r="374.775" stroke="url(#paint0_linear_1106_91)"
            stroke-width="200" />
        <defs>
            <linearGradient id="paint0_linear_1106_91" x1="1016.42" y1="339.154" x2="100.5" y2="876.42"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="white" stop-opacity="0.4" />
                <stop offset="1" stop-color="white" stop-opacity="0.25" />
            </linearGradient>
        </defs>
    </svg>
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
                        const firstIndikator = response[0];
                        $('#indikator_id').val(firstIndikator.kode_indikator).trigger('change');
                        $('#indikator_value').text(firstIndikator.nama_indikator);
                    }
                }
            });
        }

        function getKecamatan(indikatorId) {
            var selectedIndikatorText = $('#indikator_id option:selected').text();
            $('#indikator_value').text(selectedIndikatorText);

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
