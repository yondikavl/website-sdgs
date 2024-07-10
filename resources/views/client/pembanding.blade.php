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

        th,
        td {
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

        <div class="table-container">
            <table id="table1" class="overflow-auto">
                <thead>
                    <tr>
                        <th>Kecamatan</th>
                        @for ($year = 2019; $year <= 2024; $year++)
                            <th>{{ $year }}</th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    @foreach (['Teluk Betung Barat', 'Teluk Betung Timur', 'Teluk Betung Selatan', 'Teluk Betung Utara', 'Tanjung Karang Timur', 'Tanjung Karang Pusat', 'Tanjung Karang Barat', 'Tanjung Senang', 'Kedaton', 'Panjang', 'Sukarame', 'Sukabumi', 'Rajabasa', 'Tanjung Raya', 'Labuhan Ratu', 'Way Halim', 'Kemiling', 'Langkapura', 'Enggal', 'Kedamaian'] as $kecamatan)
                        <tr>
                            <td>{{ $kecamatan }}</td>
                            @for ($year = 2019; $year <= 2024; $year++)
                                <td>-</td>
                            @endfor
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <table id="table2" class="overflow-auto">
                <thead>
                    <tr>
                        <th>Kecamatan</th>
                        @for ($year = 2019; $year <= 2024; $year++)
                            <th>{{ $year }}</th>
                        @endfor
                    </tr>
                </thead>
                <tbody>
                    @foreach (['Teluk Betung Barat', 'Teluk Betung Timur', 'Teluk Betung Selatan', 'Teluk Betung Utara', 'Tanjung Karang Timur', 'Tanjung Karang Pusat', 'Tanjung Karang Barat', 'Tanjung Senang', 'Kedaton', 'Panjang', 'Sukarame', 'Sukabumi', 'Rajabasa', 'Tanjung Raya', 'Labuhan Ratu', 'Way Halim', 'Kemiling', 'Langkapura', 'Enggal', 'Kedamaian'] as $kecamatan)
                        <tr>
                            <td>{{ $kecamatan }}</td>
                            @for ($year = 2019; $year <= 2024; $year++)
                                <td>-</td>
                            @endfor
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // JavaScript untuk memanipulasi tabel, jika diperlukan
    </script>
@endsection
