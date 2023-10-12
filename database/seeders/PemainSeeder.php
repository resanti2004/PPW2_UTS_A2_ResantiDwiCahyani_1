<?php

namespace Database\Seeders;

use App\Models\pemain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = pemain::create([
            "nama_pemain" => 'Muhammad Adisatryo',
            "no_panggung" => '1',
            "posisi" => 'Kiper' 
        ],
        [
            "nama_pemain" => 'Pratama Arhan',
            "no_panggung" => '12',
            "posisi" => 'Bek'
        ],
        // // [
        // //     "nama_pemain" => 'Marselino Ferdinan',
        // //     "no_panggung" => '7',
        // //     "posisi" => 'Gelandang'
        // // ],
        // // [
        // //     "nama_pemain" => 'Taufik Hidayat',
        // //     "no_panggung" => '9',
        // //     "posisi" => 'Penyerang'
        );
        // pemain::factory(10)->create();
    }
}
