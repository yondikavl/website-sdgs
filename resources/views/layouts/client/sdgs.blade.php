<div class="text-center mb-5">
    @foreach ($indikators as $indikator)
    <a href="/indikator/{{$indikator->id}}">
        <img src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" width="50" alt="{{$indikator->nama_indikator}}">
    </a>
    @endforeach
</div>