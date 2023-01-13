<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_barangs')->insert([
            [
                'nama_kategori_barang'=> 'Pakaian',
                'created_at'          => date("Y-m-d H:i:s")
            ],
            [
                'nama_kategori_barang'=> 'Aksesoris',
                'created_at'          => date("Y-m-d H:i:s")
            ],

        ]);
    }
}
