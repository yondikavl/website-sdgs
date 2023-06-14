@extends('layouts.client.app')

@section('title', 'Hubungi Kami')

@section('content')
<h1 class="text-center">Hubungi Kami</h1>
<form action="mailto:sekretariat.sdgs@bappeda.go.id" method="POST">
    @csrf
    <div class="form-group col-12">
        <label for="nama">Nama: </label>
        <input class="form-control col-4" type="text" id="nama" name="nama" required><br><br>
        <label for="email">Email: </label>
        <input class="form-control col-4" type="email" id="email" name="email" required><br><br>
    </div>
    <div class="form-group col-12">
        <label for="pesan">Pesan: </label>
        <textarea class="form-control col-4" id="pesan" name="pesan" rows="5" required></textarea><br><br>
        <input class="btn btn-success mb-3" type="submit" value="Kirim Pesan">
    </div>
    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=bappeda kota bandar lampung&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
</form>

@endsection