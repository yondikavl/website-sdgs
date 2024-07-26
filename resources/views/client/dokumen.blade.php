@extends('layouts.client.app')

@section('title', 'Dokumen')

@section('content')
    <div class="container mt-5">
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
                                <th scope="col">Preview</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Voluntary Local Review (VLR) Kota Bandar Lampung Tahun 2024</td>
                                <td>
                                    <a class="btn btn-primary"
                                        href="{{ asset('assets/template/DRAFT-BUKU-VLR-BANDAR-LAMPUNG-2024.pdf') }}"
                                        target="_blank" download="DRAFT-BUKU-VLR-BANDAR-LAMPUNG-2024">
                                        <i class="fa fa-download"></i> Download
                                    </a>
                                </td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#previewModal"
                                        data-file="{{ asset('assets/template/DRAFT-BUKU-VLR-BANDAR-LAMPUNG-2024.pdf') }}"><i
                                            class="fa fa-eye"></i> Preview</button></td>
                            </tr>
                            <tr>
                                <td>Manual Book Kota Bandar Lampung Tahun 2024</td>
                                <td>
                                    <a class="btn btn-primary"
                                        href="{{ asset('assets/template/Manual-Book-Dashboard-SDGs-Kota Bandar-Lampung-2024.pdf') }}"
                                        target="_blank" download="Manual-Book-Dashboard-SDGs-Kota Bandar-Lampung-2024">
                                        <i class="fa fa-download"></i> Download
                                    </a>
                                </td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#previewModal"
                                        data-file="{{ asset('assets/template/Manual-Book-Dashboard-SDGs-Kota Bandar-Lampung-2024.pdf') }}"><i
                                            class="fa fa-eye"></i> Preview</button></td>
                            </tr>
                            <tr>
                                <td>Booklet Kota Bandar Lampung Tahun 2024</td>
                                <td>
                                    <a class="btn btn-primary"
                                        href="{{ asset('assets/template/Admin-Template-Pencapaian.xlsx') }}" target="_blank"
                                        download="Admin-Template-Pencapaian">
                                        <i class="fa fa-download"></i> Download
                                    </a>
                                </td>
                                <td><button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#previewModal"
                                        data-file="{{ asset('assets/template/Admin-Template-Pencapaian.xlsx') }}"><i
                                            class="fa fa-eye"></i> Preview</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="previewModal" tabindex="-1" role="dialog" aria-labelledby="previewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">File Preview</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h1></h1>
                <div class="modal-body">
                    <iframe id="previewFrame" src="" frameborder="0" style="width: 100%; height: 500px;"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('#previewModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget);
                var file = button.data('file');
                var modal = $(this);
                modal.find('#previewFrame').attr('src', file);
            });

            $('#previewModal').on('hidden.bs.modal', function() {
                var modal = $(this);
                modal.find('#previewFrame').attr('src', '');
            });
        });
    </script>

    <style>
        @media (max-width: 768px) {
            .modal-lg {
                max-width: 100%;
            }

            .modal-body {
                padding: 10px;
            }

            #previewFrame {
                height: calc(100vh - 120px);
                /* Adjust height for mobile screens */
            }
        }
    </style>
@endsection
