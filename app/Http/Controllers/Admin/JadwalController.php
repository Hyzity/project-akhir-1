<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\NamaKelas;
use App\Models\JadwalHari;
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

        // Create an associative array to store subjects for each day
        $pelajaran = [];

        // Iterate through each day and retrieve its subjects
        foreach ($hari as $day) {
            $pelajaran[$day->id] = MataPelajaran::where('id_hari', $day->id)->get();
        }

        // Pass both hari and subjectsByDay to the view
        return view('admin.jadwal.show', compact('hari', 'pelajaran', 'idkelas'));
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
        NamaKelas::create($validate);
        return redirect()->route('admin.jadwal.index')->with('success', 'Produk berhasil disimpan');
    }
    public function createHari($id)
    {

        return view('admin.jadwal.createHari', compact('id'));
    }
    public function storeHari(Request $request)
    {
        $validate = $request->validate([
            'nama_hari' => 'required',
            'id_kelas' => 'required'
        ]);

        $validate['user_id'] = Auth::user()->id;
        JadwalHari::create($validate);
        return redirect()->route('admin.jadwal.index')->with('success', 'Data berhasil disimpan');
    }

    public function createPelajaran($id)
    {

        return view('admin.jadwal.createPelajaran', compact('id'));
    }
    public function storePelajaran(Request $request)
    {
        $validate = $request->validate([
            'mata_pelajaran' => 'required',
            'id_hari' => 'required'
        ]);

        $validate['user_id'] = Auth::user()->id;
        MataPelajaran::create($validate);
        return redirect()->route('admin.jadwal.index')->with('success', 'Data berhasil disimpan');
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
        return redirect()->route('admin.jadwal.index')->with('success', 'Data berhasil dihapus');

    }
        public function editHari($id)
        {
            $hari= JadwalHari::findOrFail($id);

            return view('admin.jadwal.editHari', compact('hari'));
        }
}
