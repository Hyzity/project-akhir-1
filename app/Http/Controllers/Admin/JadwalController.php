<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\NamaKelas;
use App\Models\JadwalHari;
use App\Models\Guru;
use App\Models\MataPelajaran;

class JadwalController extends Controller
{
    public function index()
    {

        $kelas = NamaKelas::all();
        return view('admin.jadwal.index', compact('kelas'));
    }


    public function showHari($id)
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

        return view('admin.jadwal.show', compact('hari', 'pelajaran', 'idkelas', 'waktu', 'namaguru'));
    }


    public function createkelas()
    {

        return view('admin.jadwal.createKelas');
    }


    public function storekelas(Request $request)
    {
        $validate = $request->validate([
            'nama_kelas' => 'required'
        ]);
    
        $validate['user_id'] = Auth::user()->id;
    
        // Buat kelas baru
        $kelas = NamaKelas::create($validate);
    
        // Buat jadwal_haris untuk hari Senin hingga Sabtu
        $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        foreach ($days as $day) {
            JadwalHari::create([
                'nama_hari' => $day,
                'id_kelas' => $kelas->id,
                'user_id' => $validate['user_id']
            ]);
        }
    
        return redirect()->route('admin.jadwal.index')->with('success', 'Kelas dan jadwal harian berhasil disimpan');
    }
    // public function createHari($id)
    // {

    //     return view('admin.jadwal.createHari', compact('id'));
    // }
    // public function storeHari(Request $request)
    // {
    //     $validate = $request->validate([
    //         'nama_hari' => 'required',
    //         'id_kelas' => 'required'
    //     ]);

    //     $validate['user_id'] = Auth::user()->id;
    //     JadwalHari::create($validate);
    //     return redirect()->route('admin.jadwal.showhari', $validate['id_kelas'])->with('success', 'Data berhasil disimpan');
    // }

    public function createPelajaran($id, $idkelas)
    {
        $gurus = Guru::all();
        return view('admin.jadwal.createPelajaran', compact('id', 'idkelas', 'gurus'));
    }
    public function storePelajaran(Request $request)
    {
        $validate = $request->validate([
            'mata_pelajaran' => 'required|',
            'id_hari' => 'required',
            'id_guru' => 'required',
            'id_kelas' => 'required'
        ]);
        $idkelas = $request['id_kelas'];

        $validate['user_id'] = Auth::user()->id;
        MataPelajaran::create($validate);
        return redirect()->route('admin.jadwal.showhari', $idkelas)->with('success', 'Data berhasil disimpan');
    }
    public function destroyKelas($id)
    {
        $kelas = NamaKelas::findOrFail($id);

        $kelas->delete();

        return redirect()->route('admin.jadwal.index')->with('success', 'Data berhasil dihapus');
    }
    public function editKelas($id)
    {
        $kelas = NamaKelas::findOrFail($id);

        return view('admin.jadwal.editKelas', compact('kelas'));
    }
    public function updateKelas(Request $request, $id)
    {
        $product = NamaKelas::findOrFail($id);
        $validateData = $request->validate([
            'nama_kelas' => 'required',
        ]);
        $validateData['user_id'] = Auth::id();

        $product->update($validateData);
        return redirect()->route('admin.jadwal.index')->with('success', 'Data berhasil diperbarui');
    }
    public function editHari($id)
    {
        $hari = JadwalHari::findOrFail($id);

        return view('admin.jadwal.editHari', compact('hari'));
    }
    public function editPelajaran($id)
    {
        $pelajaran = MataPelajaran::findOrFail($id);
        $gurus = Guru::all(); // Retrieve all teachers
        return view('admin.jadwal.editPelajaran', compact('pelajaran', 'gurus'));
    }

    public function updateHari(Request $request, $id)
    {
        $product = JadwalHari::findOrFail($id);
        $validateData = $request->validate([
            'nama_hari' => 'required',
        ]);
        $validateData['user_id'] = Auth::id();

        $product->update($validateData);
        return redirect()->route('admin.jadwal.index')->with('success', 'Data berhasil diperbarui');
    }
    public function updatePelajaran(Request $request, $id)
    {
        $pelajaran = MataPelajaran::findOrFail($id);
        $validateData = $request->validate([
            'mata_pelajaran' => 'required',
            'id_guru' => 'required',
        ]);

        $validateData['user_id'] = Auth::id();
        $pelajaran->update($validateData);

        return redirect()->route('admin.jadwal.index')->with('success', 'Data berhasil diperbarui');
    }
    // public function destroyHari($id)
    // {
    //     $kelas = JadwalHari::findOrFail($id);

    //     $kelas->delete();

    //     return redirect()->route('admin.jadwal.index')->with('success', 'Data berhasil dihapus');
    // }
    public function destroyPelajaran($id)
    {
        $kelas = MataPelajaran::findOrFail($id);

        $kelas->delete();

        return redirect()->route('admin.jadwal.index')->with('success', 'Data berhasil dihapus');
    }
}
