<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JahitanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tailors')->insert([
            'pelanggan_id' => rand(1, 2),
            'nama_jahitan' => 'Jahitan '.str_random(20),
            'ongkos_jahitan' => rand(1, 100000),
            'jumlah_jahitan' => rand(1, 10),
            'total_harga' => rand(1, 200000),
            'estimasi_selesai' => rand(1, 4),
            'tgl_masuk' => date('Y-m-d'),
            'tgl_diambil' => date('Y-m-d'),
            'verification_type' => 0
        ]);
    }
}
