<div class="text-center mb-5">
    @foreach ($tujuans as $tujuan)
        <a href="/pembanding/{{ $tujuan->id }}">
            <img src="{{ asset('assets/ikon/' . $tujuan->ikon_tujuan) }}" width="50" alt="{{ $tujuan->nama_tujuan }}">
        </a>
    @endforeach
</div>
