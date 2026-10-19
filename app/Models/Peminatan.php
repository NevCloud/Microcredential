<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminatan extends Model
{
    use HasFactory;

    protected $table = 'peminatan';
    protected $primaryKey = 'id_peminatan';

    protected $fillable = [
        'id_track',
        'nama_peminatan',
        'deskripsi',
        'jenjang',
        'biaya_formulir',
        'biaya_penyelenggaraan',
        'kuota_minimal',
        'is_active',
    ];

    /**
     * Relasi ke tabel tracks (Setiap peminatan milik satu track)
     */
    public function track()
    {
        return $this->belongsTo(Track::class, 'id_track', 'id_track');
    }
}
