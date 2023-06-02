@extends('layouts.client.app')

@section('title', 'Detail Indikator')

@section('content')

@include('layouts.client.sdgs')

<div class="card text-center">
    <div class="card-body">
        <h1>Detail Indikator</h1>
        <img src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" width="80" alt="">
        <h2>{{$indikator->nama_indikator}}</h2>
        <p>{{$indikator->deskripsi_indikator}}</p>
    </div>
</div>

        <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{ __('Tabel Data Sub-Indikator') }}</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="d-none d-md-block">Indikator</th>
                    <th>Target</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($subindikators->where('indikator_id', $indikator->id) as $subindikator)
                  <tr>
                    <td class="d-none d-md-block">{{$subindikator->kode_sub}}</td>
                    <td>{{$subindikator->nama_sub}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th class="d-none d-md-block">Indikator</th>
                    <th>Target</th>
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
