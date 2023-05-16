<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('buku')->insert([
            'judul'=>'Pergi',
            'tanggal_terbit' => Carbon::create('2000', '01', '01'),
            'pencipta'=>'Tere Liye',
            'harga'=>'75000'
        ]); 
    }
}
