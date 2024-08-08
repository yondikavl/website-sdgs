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
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow">
                    <img class="card-img-top" src="{{ asset('assets/img/vlr.png') }}" alt="VLR Kota Bandar Lampung 2024">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Voluntary Local Review (VLR) Kota Bandar Lampung Tahun 2024</h5>
                        <div class="mt-auto">
                            <a class="btn btn-primary btn-block mb-2"
                                href="{{ asset('assets/template/DRAFT-BUKU-VLR-BANDAR-LAMPUNG-2024.pdf') }}" target="_blank"
                                download="DRAFT-BUKU-VLR-BANDAR-LAMPUNG-2024">
                                <i class="fa fa-download"></i> Download
                            </a>
                            <button type="button" class="btn btn-secondary btn-block" data-toggle="modal"
                                data-target="#previewModal"
                                data-file="{{ asset('assets/template/DRAFT-BUKU-VLR-BANDAR-LAMPUNG-2024.pdf') }}">
                                <i class="fa fa-eye"></i> Preview
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow">
                    <img class="card-img-top" src="{{ asset('assets/img/manual-book.png') }}"
                        alt="Manual Book Kota Bandar Lampung 2024">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Manual Book Kota Bandar Lampung Tahun 2024</h5>
                        <div class="mt-auto">
                            <a class="btn btn-primary btn-block mb-2"
                                href="{{ asset('assets/template/Manual-Book-Dashboard-SDGs-Kota Bandar-Lampung-2024.pdf') }}"
                                target="_blank" download="Manual-Book-Dashboard-SDGs-Kota Bandar-Lampung-2024">
                                <i class="fa fa-download"></i> Download
                            </a>
                            <button type="button" class="btn btn-secondary btn-block" data-toggle="modal"
                                data-target="#previewModal"
                                data-file="{{ asset('assets/template/Manual-Book-Dashboard-SDGs-Kota Bandar-Lampung-2024.pdf') }}">
                                <i class="fa fa-eye"></i> Preview
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow">
                    <img class="card-img-top" src="{{ asset('assets/img/booklet.png') }}"
                        alt="Booklet Kota Bandar Lampung 2024">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Booklet Kota Bandar Lampung Tahun 2024</h5>
                        <div class="mt-auto">
                            <a class="btn btn-primary btn-block mb-2"
                                href="{{ asset('assets/template/DRAFT-BOOKLET-VLR-BANDAR-LAMPUNG-2024.pdf') }}"
                                target="_blank" download="DRAFT-BOOKLET-VLR-BANDAR-LAMPUNG-2024">
                                <i class="fa fa-download"></i> Download
                            </a>
                            <button type="button" class="btn btn-secondary btn-block" data-toggle="modal"
                                data-target="#previewModal"
                                data-file="{{ asset('assets/template/DRAFT-BOOKLET-VLR-BANDAR-LAMPUNG-2024.pdf') }}">
                                <i class="fa fa-eye"></i> Preview
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow">
                    <img class="card-img-top" src="{{ asset('assets/img/meta-ekonomi.png') }}"
                        alt="Metadata Pilar Ekonomi Edisi II">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Metadata Pilar Ekonomi Edisi II</h5>
                        <div class="mt-auto">
                            <a class="btn btn-primary btn-block mb-2"
                                href="{{ asset('assets/template/Metadata-Pilar-Ekonomi-Edisi-II.pdf') }}" target="_blank"
                                download="Metadata-Pilar-Ekonomi-Edisi-II">
                                <i class="fa fa-download"></i> Download
                            </a>
                            <button type="button" class="btn btn-secondary btn-block" data-toggle="modal"
                                data-target="#previewModal"
                                data-file="{{ asset('assets/template/Metadata-Pilar-Ekonomi-Edisi-II.pdf') }}">
                                <i class="fa fa-eye"></i> Preview
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow">
                    <img class="card-img-top" src="{{ asset('assets/img/meta-sosial.png') }}"
                        alt="Metadata Pilar Sosial Edisi II">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Metadata Pilar Sosial Edisi II</h5>
                        <div class="mt-auto">
                            <a class="btn btn-primary btn-block mb-2"
                                href="{{ asset('assets/template/Metadata-Pilar-Sosial-Edisi-II.pdf') }}" target="_blank"
                                download="Metadata-Pilar-Sosial-Edisi-II">
                                <i class="fa fa-download"></i> Download
                            </a>
                            <button type="button" class="btn btn-secondary btn-block" data-toggle="modal"
                                data-target="#previewModal"
                                data-file="{{ asset('assets/template/Metadata-Pilar-Sosial-Edisi-II.pdf') }}">
                                <i class="fa fa-eye"></i> Preview
                            </button>
                        </div>
                    </div>
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
                <div class="modal-body">
                    <iframe id="previewFrame" src="" frameborder="0"
                        style="width: 100%; height: 500px;"></iframe>
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
        .card {
            border-radius: 10px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            height: 150px;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .modal-lg {
                max-width: 100%;
            }

            .modal-body {
                padding: 10px;
            }

            #previewFrame {
                height: calc(100vh - 120px);
            }
        }
    </style>
@endsection
