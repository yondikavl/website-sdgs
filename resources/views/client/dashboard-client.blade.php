@extends('layouts.client.app')

@section('title', 'Dashboard')

@section('style')
    <style>
        .container {
            width: 80%;
            margin: 15px auto;
        }

        h2 {
            text-align: center;
        }
    </style>
@endsection

@section('content')

    <div class="col-12">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <h1 class="text-center font-weight-bold mb-5">Dashboard SDGs</h1>
                </div>
            </div>
        </div>
        <div>
            <canvas id="myChart"></canvas>
        </div>
        <script src="script.js"></script>
    </div>

@endsection

@section('script')

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
                datasets: [{
                    label: 'apples',
                    data: [12, 19, 3, 17, 6, 3, 7],
                    backgroundColor: "rgba(153,255,51,0.6)"
                }, {
                    label: 'oranges',
                    data: [2, 29, 5, 5, 2, 3, 10],
                    backgroundColor: "rgba(255,153,0,0.6)"
                }]
            }
        });
    </script>

@endsection
