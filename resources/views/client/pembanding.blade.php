@extends('layouts.client.app')

@section('title', 'Analisis Pembanding')

@section('style')
    <style>
        .table-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px;
        }

        table {
            width: 45%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        @media (max-width: 768px) {
            table {
                width: 100%;
            }
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
            min-width: 100px;
            max-width: 100px;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <h1 class="text-center font-weight-bold mb-5">Analisis Pembanding SDGs Kota Bandar Lampung</h1>
                </div>
            </div>
        </div>

        <div class="form-container">
            <!-- Tujuan -->
            <div class="form-group">
                <label for="tujuan_id" class="">{{ __('Tujuan') }}</label>
                <select class="form-control rounded-2" name="tujuan_id" id="tujuan_id" onchange="getIndikators(this.value)" required>
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
                    <label for="kecamatan_id_1" class="col-md-6">{{ __('Kecamatan 1') }}</label>
                    <select class="form-control rounded-2" id="kecamatan_id_1" name="kecamatan_id_1" onchange="updateTable1()">
                        <option value="">Pilih Kecamatan 1</option>
                    </select>
                </div>
                <table id="table1" class="overflow-auto">
                    <thead>
                        <tr>
                            <th>Indikator</th>
                            @foreach($tahuns as $item)
                                <th>{{ $item }}</th>
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
                    <label for="kecamatan_id_2" class="col-md-6">{{ __('Kecamatan 2') }}</label>
                    <select class="form-control rounded-2" id="kecamatan_id_2" name="kecamatan_id_2" onchange="updateTable2()">
                        <option value="">Pilih Kecamatan 2</option>
                    </select>
                </div>
                <table id="table2" class="overflow-auto">
                    <thead>
                        <tr>
                            <th>Indikator</th>
                            @foreach($tahuns as $item)
                                <th>{{ $item }}</th>
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
        if (!tujuanId || !kecamatanId) return;

        fetch(`/pembanding/pencapaian/${tujuanId}/${kecamatanId}`)
            .then(response => response.json())
            .then(data => {
                const tahuns = @json($tahuns);
                let tableBody = document.querySelector(`#${tableId} tbody`);
                tableBody.innerHTML = '';

                for (let indikator in data) {
                    let row = `<tr>
                                   <td>${indikator}</td>`;
                    tahuns.forEach(tahun => {
                        row += `<td>${data[indikator][tahun] || '-'}</td>`;
                    });
                    row += `</tr>`;
                    tableBody.innerHTML += row;
                }
            });
    }

    function updateKecamatanOptions() {
        fetch(`/pembanding/kecamatans`)
            .then(response => response.json())
            .then(data => {
                let kecamatanSelect1 = document.getElementById('kecamatan_id_1');
                let kecamatanSelect2 = document.getElementById('kecamatan_id_2');
                kecamatanSelect1.innerHTML = '<option value="">Pilih Kecamatan 1</option>';
                kecamatanSelect2.innerHTML = '<option value="">Pilih Kecamatan 2</option>';

                data.forEach(kecamatan => {
                    let option = `<option value="${kecamatan.id}">${kecamatan.name}</option>`;
                    kecamatanSelect1.innerHTML += option;
                    kecamatanSelect2.innerHTML += option;
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
</script>
@endsection
