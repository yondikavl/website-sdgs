@extends('layouts.admin.app')

@section('title', 'Kelola pencapaian')

@section('style')
    <style>
        .dataTables_wrapper {
        width: 100%;
        overflow-x: auto;
    }
    </style>
@endsection

@section('content')
<div class="card">
    <div id="notification" class="alert alert-info">
    Silakan pilih tahun terlebih dahulu untuk menampilkan data.
    <select class="btn-sm btn-success" name="year_filter" id="yearFilter">
        <option value="">Pilih Tahun</option>
        @foreach ($years as $tahun)
        <option value="{{ $tahun }}">{{ $tahun }}</option>
        @endforeach
    </select>
</div>
    <div class="card-header">
        <h3 class="card-title">{{ __('Tabel Data pencapaian') }}</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body hidden" id="dataTableContainer">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Indikator</th>
                    <th>Nama Indikator</th>
                    <th>Tahun</th>
                    <th>Nilai</th>
                    <th>Sumber Data</th>
                    <th>Nama Kecamatan</th>
                    {{-- <th>Nama Pencapaian/Kegiatan</th> --}}
                    {{-- <th>Alokasi Anggaran</th>
                    <th>Sumber Pendanaan</th>
                    <th>Lokasi Pendanaan</th> --}}
                    <th>Tingkatan</th>
                    <th>Keterangan</th>
                    <th>Dibuat tanggal</th>
                    <th>Diperbaharui tanggal</th>
                    <th>More</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i = 1;
                    ?>
                @foreach ($pencapaians as $pencapaian)
                <tr>
                    <td>{{$i++}}.</td>
                    <td>{{$pencapaian->indikator_id}}</td>
                    <td>{{$pencapaian->Indikator->nama_indikator ?? '-'}}</td>
                    <td>{{$pencapaian->tahun}}</td>
                    <td>{{$pencapaian->persentase}}</td>
                    <td>{{$pencapaian->sumber_data}}</td>
                    @php
                        $kecamatanNames = $pencapaian->Kecamatan->pluck('name')->toArray();
                        $kecamatansString = implode(', ', $kecamatanNames);
                        $decodedkecamatans = explode(', ', $kecamatansString);
                    @endphp

                    @foreach ($decodedkecamatans as $kecamatan)
                        <td>{{ $kecamatan }}</td>
                    @endforeach
                    {{-- <td>{{$pencapaian->nama_kegiatan ?? '-'}}</td>
                    <td>{{$pencapaian->anggaran ?? '-'}}</td>
                    <td>{{$pencapaian->sumber_pendanaan ?? '-'}}</td>
                    <td>{{$pencapaian->lokasi ?? '-'}}</td> --}}
                    <td>{{$pencapaian->tingkatan ?? '-'}}</td>
                    <td>{{$pencapaian->keterangan ?? '-'}}</td>
                    <td>{{$pencapaian->created_at}}</td>
                    <td>{{$pencapaian->updated_at}}</td>
                    <td class="manage-row">
                        @if(auth()->user()->roles_id == 1)
                        <a href="{{ route('super.pencapaian.show',$pencapaian->id) }}" class="show-button">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('super.pencapaian.edit',$pencapaian->id) }}" class="edit-button">
                            <i class="fa-solid fa-marker"></i>
                        </a>
                        <!-- Button trigger modal -->
                        <a role="button" class="delete-button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-sm{{$pencapaian->id}}">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-sm{{$pencapaian->id}}" tabindex="-1" role="dialog" aria-hidden="">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><strong>Hapus Data</strong></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">Apakah anda yakin ingin menghapus data?</div>
                                    <div class="modal-footer">
                                        <form action="{{route('super.pencapaian.destroy', $pencapaian->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" class="btn btn-danger light" value="Hapus">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif(auth()->user()->roles_id == 2)
                        <a href="{{ route('admin.pencapaian.show',$pencapaian->id) }}" class="show-button">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('admin.pencapaian.edit',$pencapaian->id) }}" class="edit-button">
                            <i class="fa-solid fa-marker"></i>
                        </a>
                        @elseif(auth()->user()->roles_id == 3)
                        <a href="{{ route('opd.pencapaian.show',$pencapaian->id) }}" class="show-button">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{ route('opd.pencapaian.edit',$pencapaian->id) }}" class="edit-button">
                            <i class="fa-solid fa-marker"></i>
                        </a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@endsection

@section('script')
<script>
    $(function () {
        var table = $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": [
                {
                    extend: 'csv',
                    exportOptions: {
                        columns: ':not(:first-child):not(:last-child)'
                    }
                },
                {
                    extend: 'excel',
                    exportOptions: {
                        columns: ':not(:first-child):not(:last-child)'
                    }
                },
                {
                    extend: 'pdf',
                    exportOptions: {
                        columns: ':not(:first-child):not(:last-child)'
                    }
                },
                {
                    extend: 'print',
                    exportOptions: {
                        columns: ':not(:first-child):not(:last-child)'
                    }
                }
            ]
        });

        table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        $('#yearFilter').on('change', function () {
            var selectedYear = $(this).val();
            if (selectedYear) {
                $('#dataTableContainer').removeClass('hidden');
                table.columns(3).search('^' + selectedYear + '$', true, false).draw();
            } else {
                $('#dataTableContainer').addClass('hidden');
                table.columns(3).search('').draw();
            }
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
