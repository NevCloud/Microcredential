<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingPageKonten extends Model
{
    use HasFactory;

    protected $table = 'landing_page_konten';
    protected $primaryKey = 'id_landing_page_konten';

    protected $fillable = [
        'bagian_halaman',
        'jenis_konten',
        'judul',
        'deskripsi',
        'gambar_path',
        'is_active',
    ];
}
