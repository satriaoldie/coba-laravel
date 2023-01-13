<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_kategori_barangs')->insert([
            [
                'id_kategori'  => 1,
                'nama_sub_kategori_brg' => "Baju Kemeja",
                'created_at'   => date("Y-m-d H:i:s")
            ],
            [
                'id_kategori'  => 1,
                'nama_sub_kategori_brg' => "Celana Jeans",
                'created_at'   => date("Y-m-d H:i:s")
            ],
            [
                'id_kategori'  => 2,
                'nama_sub_kategori_brg' => "Kalung Emas",
                'created_at'   => date("Y-m-d H:i:s")
            ],
            [
                'id_kategori'  => 2,
                'nama_sub_kategori_brg' => "Cincin Permata",
                'created_at'   => date("Y-m-d H:i:s")
            ],
            
        ]);
    }
}
