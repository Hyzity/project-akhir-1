<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NamaKelas;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = ['1a', '1b', '2a', '2b', '3a', '3b', '4a', '4b', '5a', '5b', '6a', '6b'];

        foreach ($kelas as $nama_kelas) {
            NamaKelas::create([
                'nama_kelas' => strtoupper($nama_kelas),
                'user_id' => '1',
            ]);
        }
    }
}
