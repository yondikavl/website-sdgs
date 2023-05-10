@extends('layouts.admin.app')

@section('title', 'Kelola Sub-Indikator')

@section('content')

        <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{ __('Tabel Data Sub-Indikator') }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>ID Indikator</th>
                    <th>Ikon</th>
                    <th>Nama Sub-Indikator</th>
                    <th>Deskripsi</th>
                    <th>More</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($subindikators as $subindikator)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$subindikator->indikator_id}}</td>
                    <td><img src="{{ asset('assets/ikon/'.$subindikator->ikon_subindikator) }}" alt="" width="50"></td>
                    <td>{{$subindikator->nama_sub}}</td>
                    <td>{{$subindikator->deskripsi_sub}}</td>
                    <td class="manage-row">
                        @if(auth()->user()->roles_id == 1)
                          <a href="{{ route('super.subindikator.show',$subindikator->id) }}" class="show-button">
                            <i class="fa-solid fa-eye"></i>
                          </a>
                          <a href="{{ route('super.subindikator.edit',$subindikator->id) }}" class="edit-button">
                            <i class="fa-solid fa-marker"></i>
                          </a>
                          <!-- Button trigger modal -->
                          <a role="button"  class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$subindikator->id}}">
                            <i class="fa-solid fa-trash-can"></i>
                          </a>
                          <!-- Modal -->
                          <div class="modal fade bd-example-modal-sm{{$subindikator->id}}" tabindex="-1" role="dialog" aria-hidden="">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal">
                                        </button>
                                    </div>
                                    <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                    <div class="modal-footer">
                                        <form action="{{route('super.subindikator.destroy', $subindikator->id)}}" method="POST">
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
                          <a href="{{ route('admin.subindikator.show',$subindikator->id) }}" class="show-button">
                            <i class="fa-solid fa-eye"></i>
                          </a>
                          <a href="{{ route('admin.subindikator.edit',$subindikator->id) }}" class="edit-button">
                            <i class="fa-solid fa-marker"></i>
                          </a>
                        @endif
                        </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>ID Indikator</th>
                    <th>Ikon</th>
                    <th>Nama Sub-Indikator</th>
                    <th>Deskripsi</th>
                    <th>More</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

@endsection

@section('script')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@endsection