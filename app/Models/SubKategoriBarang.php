<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubKategoriBarang extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Relasi ke Penerbit
    public function kategori()
    {
        return $this->hasOne(KategoriBarang::class, 'id', 'id_kategori');
    } 
}
