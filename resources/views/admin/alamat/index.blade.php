@extends('layouts.admin.app')

@section('title', 'Kelola Alamat')

@section('content')
    <!--./Tabel User-->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        @if(session('status'))
                        <h4 class="alert alert-warning mb-2">{{session('status')}}</h4>
                        @endif
                        <div class="card-header bg-success">
                            <h3 class="card-title">Semua Alamat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" style="overflow-x:overlay">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">No</th>
                                        <th>Nama Kelurahan</th>
                                        <th>Long</th>
                                        <th>Lat</th>
                                        <th>More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alamats as $alamat)
                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$alamat->nama_kelurahan}}</td>
                                    <td>{{$alamat->long}}</td>
                                    <td>{{$alamat->lat}}</td>
                                    <td class="manage-row">
                                        @if(auth()->user()->roles_id == 1)
                                          <a href="{{ route('super.alamat.show',$alamat->id) }}" class="show-button">
                                            <i class="fa-solid fa-eye"></i>
                                          </a>
                                          <a href="{{ route('super.alamat.edit',$alamat->id) }}" class="edit-button">
                                            <i class="fa-solid fa-marker"></i>
                                          </a>
                                          <!-- Button trigger modal -->
                                          <a role="button"  class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$alamat->id}}">
                                            <i class="fa-solid fa-trash-can"></i>
                                          </a>
                                          <!-- Modal -->
                                          <div class="modal fade bd-example-modal-sm{{$alamat->id}}" tabindex="-1" role="dialog" aria-hidden="">
                                            <div class="modal-dialog ">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                                    <div class="modal-footer">
                                                        <form action="{{route('super.alamat.destroy', $alamat->id)}}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <input type="submit" class="btn btn-danger light" name="" id="" value="Hapus">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                                      </form>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                          @elseif(auth()->user()->roles_id == 2)
                                          <a href="{{ route('admin.alamat.show',$alamat->id) }}" class="show-button">
                                            <i class="fa-solid fa-eye"></i>
                                          </a>
                                          @elseif(auth()->user()->roles_id == 3)
                                          <a href="{{ route('opd.alamat.show',$alamat->id) }}" class="show-button">
                                            <i class="fa-solid fa-eye"></i>
                                          </a>
                                        @endif
                                        </td>
                                  </tr>
                                  @endforeach
                                  </tbody>
                            </table>
                        </div>
                        <div class="card-footer clearfix">
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>
@endsection
