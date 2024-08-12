@extends('layouts.admin.app')

@section('title', 'Ubah Data Berita')

@section('css')
<link rel="stylesheet" href="{{ asset('lte/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="{{ asset('lte/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('plugins/tinymce/js/tinymce/tinymce.min.js') }}"></script>
@endsection

@section('script')
<script src="https://cdn.tiny.cloud/1/icjjp2cihw6xqy0lhyvw78k3f4u9suo4mfgmisljt20jqi5b/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#konten_berita',
            plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
            menubar: 'file edit view insert format tools table help',
            toolbar1: 'undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullistforecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            toolbar_mode: 'wrap',
            skin: 'oxide-dark',
            setup: function (editor) {
                editor.on('change', function (e) {
                    editor.save();
                });
            }
        });
        let submit = document.getElementById("submit");
        </script>
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="{{ route('super.berita.update', $berita->id) }}"
                            enctype='multipart/form-data'>
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="judul_berita">Judul Berita</label>
                                    <input class="form-control" name="judul_berita" id="judul_berita"
                                        placeholder="Masukkan Judul Berita" value="{{ $berita->judul_berita }}">
                                </div>
                                <div class="form-group">
                                    <label for="konten_berita">Konten Berita</label>
                                    <textarea id="konten_berita" name="konten_berita" required value="{{ old('konten_berita') }}"class="form-control custom-txt-area @error('konten_berita') is-invalid @enderror"  >{{ old('konten_berita') }}</textarea>
                                    @error('konten_berita')
                                        <div id="konten-error" class="error invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <input type="file" name="gambar" class="form-control @error('gambar') is-invalid @enderror" accept="image/*">
                                    @error('gambar')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div x-data x-init="flatpickr($refs.datetimewidget, { wrap: true, enableTime: false, dateFormat: 'd/m/Y' });" x-ref="datetimewidget" class="form-group">
                                        <label for="waktu_berita">Tanggal dan Waktu Terbit</label>
                                        <div class="input-group">
                                            <input x-ref="datetime" type="text" id="waktu_berita" name="waktu_berita"
                                                data-input value=""
                                                placeholder="Masukkan Tanggal dan Waktu Terbit berita..."
                                                class="form-control @error('waktu_berita') is-invalid @enderror">
                                            @error('waktu_berita')
                                                <div id="waktu-error" class="error invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-primary" id="tgl_publish_kosongkan"
                                                    title="clear" data-clear>Kosongkan</button>
                                            </div>
                                            <div id="tgl_publishHelpBlock" class="form-text">
                                                Tanggal dan waktu direncanakan untuk terbit dan dapat diakses, harus lebih
                                                dari tanggal dan waktu sekarang. Kosongkan jika ingin berita yang telah
                                                dibuat dapat diakses dan langsung terbit saat itu juga. <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.6.0/umd/popper.min.js"
                        integrity="sha512-BmM0/BQlqh02wuK5Gz9yrbe7VyIVwOzD1o40yi1IsTjriX/NGF37NyXHfmFzIlMmoSIBXgqDiG1VNU6kB5dBbA=="
                        crossorigin="anonymous"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
                    </script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>
                    <link rel="stylesheet"
                        href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/themes/airbnb.min.css">
                    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
                @endsection
