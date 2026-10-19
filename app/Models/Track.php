<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $table = 'tracks';
    protected $primaryKey = 'id_track';

    protected $fillable = [
        'nama_track',
        'deskripsi',
        'is_active',
    ];

    /**
     * Relasi ke tabel peminatan (Satu track memiliki banyak peminatan)
     */
    public function peminatan()
    {
        return $this->hasMany(Peminatan::class, 'id_track', 'id_track');
    }
}
