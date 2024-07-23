@extends('layouts.client.app')

@section('title', 'Dokumen')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-header bg-success">{{ __('Dokumen') }}</div>
                <img class="w-100" src="{{ asset('assets/img/slider.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover shadow">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Judul</th>
                            <th scope="col">File</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Voluntary Local Review (VLR) Kota Bandar Lampung Tahun 2024</td>
                            <td><a class="fa fa-download" target="_blank"
                                href="{{asset('assets/template/Admin-Template-Pencapaian.xlsx')}}"
                                download="Admin-Template-Pencapaian">
                                </a></i></a></td>
                        </tr>
                        <tr>
                            <td>Manual Book Kota Bandar Lampung Tahun 2024</td>
                            <td><a class="fa fa-download" target="_blank"
                                href="{{asset('assets/template/Admin-Template-Pencapaian.xlsx')}}"
                                download="Admin-Template-Pencapaian">
                                </a></i></a></td>
                        </tr><tr>
                            <td>Booklet Kota Bandar Lampung Tahun 2024</td>
                            <td><a class="fa fa-download" target="_blank"
                                href="{{asset('assets/template/Admin-Template-Pencapaian.xlsx')}}"
                                download="Admin-Template-Pencapaian">
                                </a></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
