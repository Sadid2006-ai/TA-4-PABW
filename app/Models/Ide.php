<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ide extends Model
{
    protected $table = 'ide';

    protected $fillable = [
        'user_id',
        'kategori_id',
        'judul',
        'gambar',
        'deskripsi',
        'status',
        'tanggal_pengajuan',
        'jumlah_like',
    ];

    protected $casts = [
        'tanggal_pengajuan' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'ide_id');
    }
}