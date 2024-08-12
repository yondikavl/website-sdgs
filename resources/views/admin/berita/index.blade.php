@extends('layouts.admin.app')

@section('title', 'Kelola Berita')

@section('content')
    <!--./Tabel User-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Semua Berita</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="overflow-x:overlay">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No</th>
                                        <th>Judul Berita</th>
                                        <th>Gambar Berita</th>
                                        <th>Waktu Berita</th>
                                        <th>Terakhir Diubah</th>
                                        <th>More</th>
                                        {{-- <th style="width: 40px">Label</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($beritas as $berita)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $berita->judul_berita }}</td>
                                            <td>{{ $berita->gambar_berita ?? '-' }}</td>
                                            <td>{{ $berita->waktu_berita }}</td>
                                            <td>{{ $berita->updated_at }}</td>
                                            <td>
                                                <a href="{{ route('super.berita.show', $berita->id) }}" class="btn btn-info"><i
                                                        class="fa-solid fa-eye"></i></a>
                                                <a href="{{ route('super.berita.edit', $berita->id) }}"
                                                    class="btn btn-primary">
                                                    <i class="fa-solid fa-marker"></i>
                                                </a>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#hapus-{{ $berita->id }}"><i
                                                        class="fa-solid fa-trash-can"></i></button>
                                                <!-- Modal -->
                                                <div id="hapus-{{ $berita->id }}" class="modal fade" tabindex="-1"
                                                    role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog bd-danger">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">
                                                                    <strong>Hapus Berita</strong>
                                                                </h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                Apakah Anda yakin ingin menghapus konten ini? <br>
                                                                "{{ $berita->judul_berita }}"
                                                            </div>
                                                            <div class="modal-footer">
                                                                <form action="{{ route('super.berita.destroy', $berita->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="submit" class="btn btn-danger light"
                                                                        name="" id="" value="Hapus">
                                                                    <button type="button" class="btn btn-primary"
                                                                        data-dismiss="modal">Tidak</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.modal -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
