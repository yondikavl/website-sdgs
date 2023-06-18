@extends('layouts.client.app')

@section('title', 'Detail Indikator')

@section('style')
<style>
  .modal {
  display: none;
  position: fixed;
  z-index: 99;
  left: 0;
  top: 0;
  background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 30%;
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>

@endsection

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
                    {{-- get 2 tahun terakhir --}}
                    <th>{{date('Y')-1}}</th>
                    <th>{{date('Y')}}</th>
                    <th>Perangkat Daerah</th>
                    <th>Grafik</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($subindikators as $subindikator)
                  <tr>
                    <td>{{$subindikator->kode_sub}}</td>
                    <td>{{$subindikator->nama_sub}}</td>
                    <td>{{$subindikator->pencapaian->where('tahun', date('Y')-1)->first()->tipe  ?? "-"}}</td>
                    <td>
                      {{$subindikator->pencapaian->where('tahun', date('Y')-1)->first()->persentase ?? "-"}}
                    </td>
                    <td>
                        {{$subindikator->pencapaian->where('tahun', date('Y'))->first()->persentase ?? "-"}}
                    </td>

                    <td>{{$subindikator->pencapaian->where('tahun', date('Y')-1)->first()->sumber_data ?? "-"}}</td>
                    <td>
                      <div class="btn btn-primary modal-btn" onclick="showGrafik({{ $subindikator-> id}});">Detail</div>
                      <div id="myModal" class="modal">
                        <div class="modal-content">
                          <span class="close">&times;</span>
                          <h3>Grafik Pencapaian</h3>
                          <canvas id="grafik"></canvas>
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
                    <th>{{date('Y')-1}}</th>
                    <th>{{date('Y')}}</th>
                    <th>Perangkat Daerah</th>
                    <th>Grafik</th>
                  </tr>
                  </tfoot>
                </table>

              </div>
              <!-- /.card-body -->
        </div>
@endsection

@section('script')
<script>

var data = {!! json_encode($pencapaians) !!};

function showGrafik(sub_id) {
    var modal = document.getElementById("myModal");
    modal.style.display = "block";

    // Mencari data subindikator yang dipilih
    var dataSubindikator = data.find(function(item) {
        return item[sub_id];
    });

    var dataTahun = [];
    var dataPencapaian = [];

    // Mencari data pencapaian dari subindikator tersebut
    for(var i = 0; i < dataSubindikator[sub_id].length; i++) {
        dataTahun.push(dataSubindikator[sub_id][i].tahun);
        dataPencapaian.push(dataSubindikator[sub_id][i].persentase);
    }

    // Membuat grafik dimiulai dari 0 sampai nilai tertinggi
    var max = Math.max(...dataPencapaian);
    var min = Math.min(...dataPencapaian);
    var ctx = document.getElementById('grafik').getContext('2d');
    var grafik = new Chart(ctx, {
        type: 'bar',
        data: {
        labels: dataTahun,
        datasets: [{
            label: 'Pencapaian',
            data: dataPencapaian,
            backgroundColor: 'rgba(75, 192, 192, 0.6)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
        },
        options: {
        responsive: true,
        scales: {
            y: {
            beginAtZero: true,
            min: 0,
            max: max + 10
            }
        }
        }
    });

}



</script>
<script>
  var modal = document.getElementById("myModal");
var closeButton = document.getElementsByClassName("close")[0];


closeButton.onclick = function() {
  modal.style.display = "none";
};



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
