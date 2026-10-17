@extends('layouts.app')

@section('title', 'Daftar ide')

@section('content')
    <h1>Daftar ide masyarakat</h1>

    @forelse ($ide as $item)
        <div class="card">
            <h3>{{ $item->judul }}</h3>
            <p>{{ $item->kategori->nama }} &mdash; diusulkan oleh {{ $item->user->name }}</p>
            <p>{{ \Illuminate\Support\Str::limit($item->deskripsi, 140) }}</p>
            <p>
                Status: <strong>{{ $item->status }}</strong> &nbsp;
                {{ $item->jumlah_like }} suka &nbsp;
                {{ $item->komentar_count }} komentar &nbsp;
                {{ $item->tanggal_pengajuan->format('d-m-Y') }}
            </p>
        </div>
    @empty
        <p>Belum ada ide.</p>
    @endforelse
@endsection