@extends('layouts.client.app')

@section('title', 'Beranda')

@section('content')
<div>
    <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <h1 class="text-center">SDGs Kota Bandar Lampung</h1>
            <h5 class="font-weight-light text-justify">
              Kota Bandar Lampung telah berkomitmen untuk mencapai Sustainable Development Goals (SDGs) atau Tujuan Pembangunan Berkelanjutan (TPB) yang ditunjukkan dengan telah disusun dan ditetapkannya dokumen Rencana Aksi Daerah (RAD) SDGs/TPB Kota Bandar Lampung 2020-2024.
            </h5>
            <h5 class="font-weight-light text-justify d-none d-md-block">
                Ini selaras dengan dokumen RAD SDGs/TPB Provinsi Lampung yang telah ditetapkan oleh Pemerintah Provinsi Lampung. Komitmen dalam perencanaan pembangunan Kota Bandar Lampung pun ditunjukkan dengan telah diselaraskannya dokumen Rencana Pembangunan Jangka Menengah Daerah (RPJMD) Kota Bandar Lampung 2021-2026 dengan tujuan dan target dalam SDGs. Begitu juga dengan dokumen Rencana Kerja Pemerintah Daerah (RKPD) Kota Bandar Lampung yang merupakan penjabaran RPJMD untuk jangka waktu 1 (satu) tahun.
              </h5>
          </div>
        </div>
      </div>
      
    <div class="w-100 mb-3">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($pilars as $index => $pilar)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <a class="card bg-gradient-success w-100 text-white p-4" href="/pilar/{{$pilar->id}}">
                        <div class="d-flex justify-content-center align-items-center mb-3">
                            <img src="{{ asset('assets/ikon/'. $pilar->ikon_pilar) }}" width="50" alt="">
                        </div>
                        <h3 class="text-center">{{$pilar->nama_pilar}}</h3>
                        <p class="text-center d-none d-md-block">{{$pilar->deskripsi_pilar}}</p>
                    </a>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="d-md-none">
        <div id="carouselIndikator" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            @foreach ($indikators as $index => $indikator)
              <li data-target="#carouselIndikator" data-slide-to="{{ $index }}" @if ($index == 0) class="active" @endif></li>
            @endforeach
          </ol>
          <div class="carousel-inner">
            @foreach ($indikators as $index => $indikator)
              <div class="carousel-item @if ($index == 0) active @endif">
                <a href="/indikator/{{$indikator->id}}">
                  <img class="d-block w-100" src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" alt="{{$indikator->nama_indikator}}">
                </a>
              </div>
            @endforeach
            <div class="carousel-item">
              <img class="d-block w-100" src="{{ asset('assets/img/logo-sdgs.png') }}" alt="Logo SDGs">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselIndikator" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselIndikator" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      
      <div class="d-none d-md-block">
        <div class="text-center">
          @foreach ($indikators as $indikator)
          <a href="/indikator/{{$indikator->id}}">
            <img src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" width="165" alt="{{$indikator->nama_indikator}}">
          </a>
          @endforeach
          <img src="{{ asset('assets/img/logo-sdgs.png') }}" width="165" alt="Logo SDGs">
        </div>
      </div>
      
</div>

@endsection

@section('script')
<script>
$('.carousel[data-type="multi"] .item').each(function() {
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo($(this));

	for (var i = 0; i < 2; i++) {
		next = next.next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}

		next.children(':first-child').clone().appendTo($(this));
	}
});
</script>
@endsection