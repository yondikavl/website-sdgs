<div class="text-center py-5">
    @foreach ($tujuans as $tujuan)
        <a href="/tujuan/{{ $tujuan->id }}">
            <img src="{{ asset('assets/ikon/' . $tujuan->ikon_tujuan) }}" width="50" alt="{{ $tujuan->nama_tujuan }}">
        </a>
    @endforeach
</div>
