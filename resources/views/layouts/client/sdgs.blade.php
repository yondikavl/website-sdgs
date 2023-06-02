<div class="text-center mb-3">
    @foreach ($indikators as $indikator)
    <a href="/indikator/{{$indikator->id}}">
        <img src="{{ asset('assets/ikon/'. $indikator->ikon_indikator) }}" width="60" alt="{{$indikator->nama_indikator}}">
    </a>
    @endforeach
</div>