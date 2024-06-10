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

        .iframe-container {
            position: relative;
            width: 100%;
            height: 80%;
            padding-bottom: 56.25%;
            overflow: hidden;
        }

        .iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
@endsection

@section('content')

    <div class="col-12">
        <div class="container mb-5">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <h1 class="text-center font-weight-bold mb-5">Dashboard SDGs Kota Bandar Lampung</h1>
                </div>
            </div>
        </div>
        <div class="col-lg-12 mx-auto my-5">
            @include('layouts.client.dashpage')
        </div>
        <div>
            <canvas id="myChart"></canvas>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <h1 class="text-center font-weight-bold mt-5">Sebaran</h1>
                </div>
            </div>
        </div>
        <div class="iframe-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.917305483891!2d105.26125322929097!3d-5.429532143723592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbfee4029dfb%3A0xa50e761d59387013!2sBAPPEDA%20Kota%20Bandar%20Lampung!5e0!3m2!1sid!2sid!4v1717989706640!5m2!1sid!2sid"
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
