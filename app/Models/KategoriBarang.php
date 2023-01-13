<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBarang extends Model
{
    use HasFactory;
    
    protected $table = 'kategori_barangs';
    protected $guarded = [];


    // Relasi ke Buku
    public function subKategori()
    {
        return $this->belongsTo(SubKategoriBarang::class, 'id_kategori', 'id');
    }
}
