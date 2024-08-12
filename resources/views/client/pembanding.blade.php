@extends('layouts.client.app')

@section('title', 'Analisis Pembanding')

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

        .table-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-group {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 10px;
        }

        .form-group label {
            min-width: 120px;
        }

        label {
            min-width: 100px;
            max-width: 100px;
        }

        select {
            min-width: 300px;
            max-width: 300px;
        }

        select option {
            font-size: 12px;
        }

        table {
            width: 500px;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid green;
            padding: 8px;
            text-align: center;
            font-size: 12px;
        }

        th {
            background-color: #28a745;
            color: white;
        }

        th.indikator,
        td.indikator {
            width: 200px;
            /* Fixed width for indikator column */
        }

        th.tahun,
        td.tahun {
            width: 80px;
            /* Smaller width for tahun columns */
        }

        tr:nth-child(odd) {
            background-color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        @media (max-width: 768px) {
            table {
                width: 300px;
            }

            .form-group {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 560px) {
            svg {
                visibility: hidden;
            }

            table {
                width: 300px;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 1200px) {
            .table-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                margin: 20px;
            }

            table {
                width: 300px;
                border-collapse: collapse;
                margin-bottom: 20px;
            }
        }
    </style>
@endsection

@section('content')

    <div class="col-12">
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
            <div class="bg-primary my-5" style=" border-radius: 12px;">
                <h1 class="text-center py-5 font-weight-bold text-xl">Analisis Pembanding SDGs Kota Bandar Lampung</h1>
            </div>

            <div class="form-container">
                <!-- Tujuan -->
                <div class="form-group">
                    <label for="tujuan_id" class="">{{ __('Tujuan') }}</label>
                    <select class="form-control rounded-2" name="tujuan_id" id="tujuan_id"
                        onchange="getIndikators(this.value)" required>
                        <option value="">Pilih Peta Tujuan</option>
                        @foreach ($tujuans as $tujuan)
                            <option value="{{ $tujuan->id }}">{{ $tujuan->id }}. {{ $tujuan->nama_tujuan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="table-container">
                <div class="form-container">
                    <!-- Kecamatan 1 -->
                    <div class="form-group">
                        <label for="kecamatan_id_1" class="mr-2">{{ __('Kecamatan 1') }}</label>
                        <select class="form-control rounded-2" id="kecamatan_id_1" name="kecamatan_id_1"
                            onchange="updateTable1()">
                            <option value="">Pilih Kecamatan 1</option>
                        </select>
                    </div>
                    <table id="table1" class="overflow-auto">
                        <thead>
                            <tr>
                                <th class="indikator">Indikator</th>
                                @foreach ($tahuns as $item)
                                    <th class="tahun">{{ $item }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table data will be populated dynamically -->
                        </tbody>
                    </table>
                </div>

                <div class="form-container">
                    <!-- Kecamatan 2 -->
                    <div class="form-group">
                        <label for="kecamatan_id_2" class="mr-2">{{ __('Kecamatan 2') }}</label>
                        <select class="form-control rounded-2" id="kecamatan_id_2" name="kecamatan_id_2"
                            onchange="updateTable2()">
                            <option value="">Pilih Kecamatan 2</option>
                        </select>
                    </div>
                    <table id="table2" class="overflow-auto">
                        <thead>
                            <tr>
                                <th class="indikator">Indikator</th>
                                @foreach ($tahuns as $item)
                                    <th class="tahun">{{ $item }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table data will be populated dynamically -->
                        </tbody>
                    </table>
                </div>

                <div class="form-container">
                    <!-- Kecamatan 3 -->
                    <div class="form-group">
                        <label for="kecamatan_id_3" class="mr-2">{{ __('Kecamatan 3') }}</label>
                        <select class="form-control rounded-2" id="kecamatan_id_3" name="kecamatan_id_3"
                            onchange="updateTable3()">
                            <option value="">Pilih Kecamatan 3</option>
                        </select>
                    </div>
                    <table id="table3" class="overflow-auto">
                        <thead>
                            <tr>
                                <th class="indikator">Indikator</th>
                                @foreach ($tahuns as $item)
                                    <th class="tahun">{{ $item }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table data will be populated dynamically -->
                        </tbody>
                    </table>
                </div>

                <div class="form-container">
                    <!-- Kecamatan 4 -->
                    <div class="form-group">
                        <label for="kecamatan_id_4" class="mr-2">{{ __('Kecamatan 4') }}</label>
                        <select class="form-control rounded-2" id="kecamatan_id_4" name="kecamatan_id_4"
                            onchange="updateTable4()">
                            <option value="">Pilih Kecamatan 4</option>
                        </select>
                    </div>
                    <table id="table4" class="overflow-auto">
                        <thead>
                            <tr>
                                <th class="indikator">Indikator</th>
                                @foreach ($tahuns as $item)
                                    <th class="tahun">{{ $item }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table data will be populated dynamically -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        function getIndikators(tujuanId) {
            if (!tujuanId) return;

            fetch(`/pembanding/indikators/${tujuanId}`)
                .then(response => response.json())
                .then(data => {
                    updateKecamatanOptions();
                });
        }

        function updateTable(tujuanId, kecamatanId, tableId) {
            if (!tujuanId || !kecamatanId) {
                clearTable(tableId);
                return;
            }

            fetch(`/pembanding/pencapaian/${tujuanId}/${kecamatanId}`)
                .then(response => response.json())
                .then(data => {
                    const tahuns = @json($tahuns);
                    let tableBody = document.querySelector(`#${tableId} tbody`);
                    tableBody.innerHTML = '';

                    for (let indikator in data) {
                        let row = `<tr>
                            <td class="indikator">${indikator}</td>`;
                        tahuns.forEach(tahun => {
                            row += `<td class="tahun">${data[indikator][tahun] || '-'}</td>`;
                        });
                        row += `</tr>`;
                        tableBody.innerHTML += row;
                    }
                });
        }

        function clearTable(tableId) {
            let tableBody = document.querySelector(`#${tableId} tbody`);
            tableBody.innerHTML = '';
        }

        function updateKecamatanOptions() {
            fetch(`/pembanding/kecamatans`)
                .then(response => response.json())
                .then(data => {
                    let kecamatanSelect1 = document.getElementById('kecamatan_id_1');
                    let kecamatanSelect2 = document.getElementById('kecamatan_id_2');
                    let kecamatanSelect3 = document.getElementById('kecamatan_id_3');
                    let kecamatanSelect4 = document.getElementById('kecamatan_id_4');
                    kecamatanSelect1.innerHTML = '<option value="">Pilih Kecamatan 1</option>';
                    kecamatanSelect2.innerHTML = '<option value="">Pilih Kecamatan 2</option>';
                    kecamatanSelect3.innerHTML = '<option value="">Pilih Kecamatan 3</option>';
                    kecamatanSelect4.innerHTML = '<option value="">Pilih Kecamatan 4</option>';

                    data.forEach(kecamatan => {
                        let option = `<option value="${kecamatan.id}">${kecamatan.name}</option>`;
                        kecamatanSelect1.innerHTML += option;
                        kecamatanSelect2.innerHTML += option;
                        kecamatanSelect3.innerHTML += option;
                        kecamatanSelect4.innerHTML += option;
                    });
                });
        }

        function updateTable1() {
            let tujuanId = document.getElementById('tujuan_id').value;
            let kecamatanId = document.getElementById('kecamatan_id_1').value;
            updateTable(tujuanId, kecamatanId, 'table1');
        }

        function updateTable2() {
            let tujuanId = document.getElementById('tujuan_id').value;
            let kecamatanId = document.getElementById('kecamatan_id_2').value;
            updateTable(tujuanId, kecamatanId, 'table2');
        }

        function updateTable3() {
            let tujuanId = document.getElementById('tujuan_id').value;
            let kecamatanId = document.getElementById('kecamatan_id_3').value;
            updateTable(tujuanId, kecamatanId, 'table3');
        }

        function updateTable4() {
            let tujuanId = document.getElementById('tujuan_id').value;
            let kecamatanId = document.getElementById('kecamatan_id_4').value;
            updateTable(tujuanId, kecamatanId, 'table4');
        }
    </script>

@endsection
