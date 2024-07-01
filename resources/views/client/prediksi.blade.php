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
            <label for="year-select">Pilih Tujuan:</label>
            <select class="rounded-lg px-2 py-1" id="year-select" onchange="updateChartForYear()">
                <option value="2024">2024</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
            </select>
        </div>
        <div class="container mb-5">
            <canvas id="myChart"></canvas>
        </div>

        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </div>
@endsection

@section('script')
    <script script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        const kecamatanData = @json($kecamatans);

        function handleClick(event) {
            const pathElement = event.target;
            const kecamatanCode = pathElement.id.substring(1);

            const kecamatan = kecamatanData.find(item =>
                item.kecamatan.some(k => k.code === kecamatanCode)
            );

            const foundKecamatan = kecamatan.kecamatan.find(k => k.code === kecamatanCode);

            showPopup(foundKecamatan);
        }

        function showPopup(kecamatan) {
            closePopup();

            const popup = document.createElement('div');
            popup.classList.add('popup');
            popup.innerHTML = `
        <i class="fas fa-times close-icon p-1" onclick="closePopup()"></i>
        <div class="px-4 py-3">
            <h3>${kecamatan.name}</h3>
            <p>${kecamatan.deskripsi}</p>
        </div>
    `;

            document.body.appendChild(popup);
        }

        function closePopup() {
            const popup = document.querySelector('.popup');
            if (popup) {
                popup.remove();
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            kecamatanData.forEach(item => {
                item.kecamatan.forEach(kecamatan => {
                    const pathElement = document.querySelector(`#a${kecamatan.code}`);
                    if (pathElement) {
                        pathElement.addEventListener("click", handleClick);
                    }
                });
            });
        });



        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: generateMonthlyLabels(2024),
                datasets: [{
                    label: 'Tingkat Kemiskinan',
                    data: [6, 7, 8, 7, 0, 8, 7, 9, 8, 7, 6, 7],
                    backgroundColor: "rgba(153,255,51,0.6)"
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

        const data2020 = {
            kemiskinan: [2, 3, 4, 3, 5, 6, 4, 5, 6, 4, 3, 2],
            pendidikan: [7, 8, 7, 8, 9, 8, 7, 8, 9, 7, 8, 9],
            pengangguran: [4, 3, 5, 4, 6, 5, 4, 5, 6, 4, 3, 4],
            rasioGini: [2, 3, 2, 3, 4, 3, 2, 4, 3, 2, 3, 2],
            ekonomi: [5, 6, 5, 6, 7, 6, 5, 6, 7, 5, 6, 5]
        };

        const data2021 = {
            kemiskinan: [3, 4, 5, 4, 6, 5, 4, 6, 5, 4, 3, 4],
            pendidikan: [8, 9, 8, 9, 7, 8, 9, 8, 9, 8, 7, 8],
            pengangguran: [5, 4, 6, 5, 7, 6, 5, 6, 7, 5, 4, 5],
            rasioGini: [3, 4, 3, 4, 5, 4, 3, 5, 4, 3, 4, 3],
            ekonomi: [6, 7, 6, 7, 8, 7, 6, 7, 8, 6, 7, 6]
        };

        const data2022 = {
            kemiskinan: [4, 5, 6, 5, 7, 6, 5, 7, 6, 5, 4, 5],
            pendidikan: [9, 7, 8, 9, 8, 7, 8, 9, 8, 7, 9, 8],
            pengangguran: [6, 5, 7, 6, 8, 7, 6, 7, 8, 6, 5, 6],
            rasioGini: [4, 5, 4, 5, 6, 5, 4, 6, 5, 4, 5, 4],
            ekonomi: [7, 8, 7, 8, 9, 8, 7, 8, 9, 7, 8, 7]
        };

        const data2023 = {
            kemiskinan: [5, 6, 7, 6, 8, 7, 6, 8, 7, 6, 5, 6],
            pendidikan: [7, 8, 9, 8, 7, 9, 8, 9, 7, 8, 9, 8],
            pengangguran: [7, 6, 8, 7, 9, 8, 7, 8, 9, 7, 6, 7],
            rasioGini: [5, 6, 5, 6, 7, 6, 5, 7, 6, 5, 6, 5],
            ekonomi: [8, 9, 8, 9, 10, 9, 8, 9, 10, 8, 9, 8]
        };

        const data2024 = {
            kemiskinan: [6, 7, 8, 7, 9, 8, 7, 9, 8, 7, 6, 7],
            pendidikan: [8, 9, 7, 8, 9, 8, 9, 7, 8, 9, 8, 7],
            pengangguran: [8, 7, 9, 8, 10, 9, 8, 9, 10, 8, 7, 8],
            rasioGini: [6, 7, 6, 7, 8, 7, 6, 8, 7, 6, 7, 6],
            ekonomi: [9, 10, 9, 10, 8, 10, 9, 10, 8, 9, 10, 9]
        };



        document.getElementById('menu-prediksi').addEventListener('click', function(event) {
            event.preventDefault();
            updateChart('prediksi');
        });

        document.getElementById('menu-analisis').addEventListener('click', function(event) {
            event.preventDefault();
            updateChart('analisis');
        });

        function updateChart(type) {
            let selectedYear = document.getElementById('year-select').value;
            let labels = generateMonthlyLabels(selectedYear);

            let newData;
            if (type === 'prediksi') {
                newData = {
                    labels: labels,
                    datasets: [{
                        label: 'Tingkat Kemiskinan',
                        data: getDataForYear(selectedYear).kemiskinan,
                        backgroundColor: "rgba(153,255,51,0.6)"
                    }]
                };
            } else if (type === 'analisis') {
                newData = {
                    labels: labels,
                    datasets: [{
                        label: 'Tingkat Kemiskinan',
                        data: getDataForYear(selectedYear).kemiskinan,
                        backgroundColor: "rgba(153,255,51,0.6)"
                    }, {
                        label: 'Pengangguran Terbuka',
                        data: getDataForYear(selectedYear).pengangguran,
                        backgroundColor: "rgba(153,17,255,0.6)"
                    }, {
                        label: 'Rasio Gini',
                        data: getDataForYear(selectedYear).rasioGini,
                        backgroundColor: "rgba(153,255,255,0.6)"
                    }, {
                        label: 'Pertumbuhan Ekonomi',
                        data: getDataForYear(selectedYear).ekonomi,
                        backgroundColor: "rgba(255,153,51,0.6)"
                    }]
                };
            }

            myChart.data = newData;
            myChart.update();
        }

        function updateChartForYear() {
            const selectedYear = document.getElementById('year-select').value;
            const newData = getDataForYear(selectedYear);

            myChart.data.labels = generateMonthlyLabels();
            myChart.data.datasets[0].data = newData.kemiskinan;
            myChart.data.datasets[1].data = newData.pendidikan;
            myChart.update();
        }

        function generateMonthlyLabels() {
            return [2019, 2020, 2021, 2022, 2023, 2024, 2025, 2026, 2027, 2028, 2029, 2030];
        }

        function getDataForYear(year) {
            switch (year) {
                case '2020':
                    return data2020;
                case '2021':
                    return data2021;
                case '2022':
                    return data2022;
                case '2023':
                    return data2023;
                case '2024':
                    return data2024;
                default:
                    return data2020;
            }
        }

        updateChartForYear();
    </script>
@endsection
