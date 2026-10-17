@extends('layouts.app')

@section('title', 'Form Laporan Banjir')

@section('content')
    <h2>Form Pelaporan Banjir</h2>

    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf

        <label for="nama_pelapor">Nama Pelapor</label>
        <input type="text" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}">
        @error('nama_pelapor') <div class="error">{{ $message }}</div> @enderror
            
        <label for="lokasi">Lokasi (Kecamatan)</label>
        <input type="text" id="lokasi" name="lokasi" value="{{ old('lokasi') }}">
        @error('lokasi') <div class="error">{{ $message }}</div> @enderror

        <label for="tinggi_genangan">Tinggi Genangan (cm)</label>
        <input type="text" id="tinggi_genangan" name="tinggi_genangan" value="{{ old('tinggi_genangan') }}">
        @error('tinggi_genangan') <div class="error">{{ $message }}</div> @enderror

        <label for="tanggal_kejadian">Tanggal kejadian</label>
        <input type="date" id="tanggal_kejadian" name="tanggal_kejadian"
            max="{{ date('Y-m-d') }}"
            value="{{ old('tanggal_kejadian') }}">
            <p style="font-size:13px; color:#5d7285; margin-top:6px;">
                Klik ikon kalender untuk memilih tanggal (format: hari/bulan/tahun).
            </p>
        @error('tanggal_kejadian') <div class="error">{{ $message }}</div> @enderror

        <button type="submit">Kirim Laporan</button>
    </form>
@endsection