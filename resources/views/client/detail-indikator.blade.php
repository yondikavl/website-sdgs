@extends('layouts.client.app')

@section('title', 'Detail Indikator')

@section('content')

@include('layouts.client.sdgs')

<div class="card text-center">
    <div class="card-body">
      <h2>{{$indikator->nama_indikator}}</h2>
        <img src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" width="100" alt="">
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
                    <th>Kode</th>
                    <th>Jenis Data</th>
                    <th>Satuan</th>
                    <th>2022</th>
                    <th>2023</th>
                    <th>Perangkat Daerah</th>
                    <th>Detail</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($subindikators->where('indikator_id', $indikator->id) as $subindikator)
                  <tr>
                    <td>{{$subindikator->kode_sub}}</td>
                    <td>{{$subindikator->nama_sub}}</td>
                    <td>
                      @if ($loop->iteration % 2 == 0)
                          Orang
                      @else
                          %
                      @endif
                    </td>
                    <td>
                      @if ($loop->iteration % 2 == 0)
                          30
                      @else
                          90
                      @endif
                    </td>
                    <td>
                      @if ($loop->iteration % 2 == 0)
                          50
                      @else
                          40
                      @endif
                    </td>
                    <td>Dinas {{$loop->iteration}}</td>
                    <td>
                      <!-- Tombol untuk membuka modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#grafikModal">
      Detail
    </button>

    <!-- Modal -->
    <div class="modal fade" id="grafikModal" tabindex="-1" role="dialog" aria-labelledby="grafikModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="grafikModalLabel">Grafik</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <!-- Tempatkan grafik di sini -->
            <div id="chartContainer" style="height: 300px;"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Kode</th>
                    <th>Jenis Data</th>
                    <th>Satuan</th>
                    <th>2022</th>
                    <th>2023</th>
                    <th>Perangkat Daerah</th>
                    <th>Detail</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
        </div>
@endsection

@section('script')
<!-- Tambahkan script Bootstrap dan library grafik -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
  // Contoh penggunaan CanvasJS untuk membuat grafik
  window.addEventListener('DOMContentLoaded', function() {
    var chart = new CanvasJS.Chart("chartContainer", {
      // Konfigurasi grafik di sini
      // ...
    });
    chart.render();
  });
</script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": true,
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
