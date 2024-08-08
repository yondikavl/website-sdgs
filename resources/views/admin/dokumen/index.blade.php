@extends('layouts.admin.app')

@section('title', 'Kelola Dokumen')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{ __('Tabel Data Dokumen') }}</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Gambar</th>
                    <th>File</th>
                    <th>More</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dokumens as $dokumen)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dokumen->judul }}</td>
                    <td><img src="{{ asset('assets/img/' . $dokumen->gambar) }}" alt="{{ $dokumen->judul }}" width="50"></td>
                    <td><a href="{{ asset('assets/template/' . $dokumen->file) }}" target="_blank">View PDF</a></td>
                    <td class="manage-row">
                        <a href="{{ route('super.dokumen.edit', $dokumen->id) }}" class="edit-button">
                            <i class="fa-solid fa-marker"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$dokumen->id}}">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-sm{{$dokumen->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                    <div class="modal-footer">
                                        <form action="{{route('super.dokumen.destroy', $dokumen->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
