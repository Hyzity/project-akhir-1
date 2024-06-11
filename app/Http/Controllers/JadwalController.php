<?php

namespace App\Http\Controllers;
use App\Models\NamaKelas;
use App\Models\JadwalHari;
use App\Models\MataPelajaran;
use App\Models\Guru;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index(      )
    {

        $kelas = NamaKelas::all();
        return view('jadwal.index', compact('kelas'));
    }
    public function show($id)
{
    $hari = JadwalHari::where('id_kelas', $id)->get();
    $idkelas = NamaKelas::findOrFail($id);
    $waktu = ['08.00-08.35', '08.35-09.10', '09.10-09-45', '09.45-10.00', '10.00-10.35', '10.35-11.10', '11.10-11.25', '11.25-12.00', '12.00-12.35'];

    $pelajaran = [];
    $namaguru = [];

    // Iterate through each day and retrieve its subjects and associated teachers
    foreach ($hari as $day) {
        $pelajaran[$day->id] = MataPelajaran::where('id_hari', $day->id)->get();
        foreach ($pelajaran[$day->id] as $subject) {
            $namaguru[$subject->id] = Guru::find($subject->id_guru);
        }
    }

    return view('jadwal.show', compact('hari', 'pelajaran', 'idkelas', 'waktu', 'namaguru'));
}

}
