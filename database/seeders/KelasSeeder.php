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
        NamaKelas::create([
            'nama_kelas' => '12a',
            'user_id' => '1',
    ]);
    }
}
