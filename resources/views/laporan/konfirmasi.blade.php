@extends('layouts.app')

@section('title', 'Laporan Terkirim')

@section('content')
    <x-alert type="success">
        Terima kasih, <strong>{{ $laporan->nama_pelapor }}</strong>! Laporan banjir di
        <strong>{{ $laporan->lokasi }}</strong> (tinggi genangan {{ $laporan->tinggi_genangan }} cm)
        berhasil disimpan
    </x-alert>

    <a href="{{ route('laporan.index') }}">Lihat daftar laporan</a>
    <a href="{{ route('laporan.create') }}">Buat laporan lagi</a>
@endsection  