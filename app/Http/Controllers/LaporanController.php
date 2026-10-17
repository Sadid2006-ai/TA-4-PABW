<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    //Halaman Form Pelaporan
    public function create(){
        return view("laporan.form");
    }

    //Untuk nyimpan Data ke Database
    public function store(Request $request){
        $data= $request->validate([
            'nama_pelapor' => 'required|String|max:255',
            'lokasi' => 'required|String|max:255',
            'tinggi_genangan' => 'required|integer|min:1',
            'tanggal_kejadian' => 'required|date',
        ]);
    $laporan = Laporan::create($data);

    return view('laporan.konfirmasi', compact('laporan'));
    }

    public function index(){
        $laporan = Laporan::all();

        return view('laporan.daftar', compact('laporan'));
    }
}
