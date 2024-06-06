<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JadwalHari;

class JadwalHariSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 12; $i++) {
            JadwalHari::create([
                'nama_hari' => 'senin',
                'id_kelas' => $i,
                'user_id' => '1',
            ]);
            JadwalHari::create([
                'nama_hari' => 'selasa',
                'id_kelas' => $i,
                'user_id' => '1',
            ]);
            JadwalHari::create([
                'nama_hari' => 'rabu',
                'id_kelas' => $i,
                'user_id' => '1',
            ]);
            JadwalHari::create([
                'nama_hari' => 'kamis',
                'id_kelas' => $i,
                'user_id' => '1',
            ]);
            JadwalHari::create([
                'nama_hari' => 'jumat',
                'id_kelas' => $i,
                'user_id' => '1',
            ]);
        }
    }
}
