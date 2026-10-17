<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = "laporan";

    protected $fillable = [
        'nama_pelapor',
        'lokasi',
        'tinggi_genangan',
        'tanggal_kejadian',
    ];
    protected $casts = [
        'tanggal_kejadian' => 'date',
    ];

    //Status genangan
    public function getStatusAttribute(): string
    {
        if($this->tinggi_genangan > 100){
            return 'Awas';
        }elseif($this->tinggi_genangan >= 50){
            return 'Siaga';
        }
        return 'Waspada';
    }
}
