<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataUjian extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'mata_pelajaran', 'tanggal_ujian', 'jam_ujian', 'lokasi_ujian'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
