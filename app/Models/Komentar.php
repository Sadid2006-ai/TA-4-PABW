<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';

    protected $fillable = ['ide_id', 'user_id', 'isi'];

    public function ide()
    {
        return $this->belongsTo(Ide::class, 'ide_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}