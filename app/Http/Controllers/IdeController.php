<?php

namespace App\Http\Controllers;

use App\Models\Ide;

class IdeController extends Controller
{
    public function index()
    {
        $ide = Ide::with(['kategori', 'user'])
            ->withCount('komentar')
            ->latest('tanggal_pengajuan')
            ->get();

        return view('ide.index', compact('ide'));
    }
}