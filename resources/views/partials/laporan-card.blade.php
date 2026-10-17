<div class="card">
    <h3>{{ $item->lokasi }}</h3>
    <p>Pelapor: {{ $item->nama_pelapor }}</p>
    <p>Tinggi Genangan: {{ $item->tinggi_genangan }}</p>
    <p>Tanggal Kejadian: {{ $item->tanggal_kejadian->format('d M Y') }}</p>
    <span class="badge {{ $item->status }}">{{ $item->status }}</span>
</div>