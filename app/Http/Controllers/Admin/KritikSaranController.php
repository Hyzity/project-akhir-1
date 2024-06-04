<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KritikdanSaran;

class KritikSaranController extends Controller
{
    public function index()
    {
        // Ambil semua pesan dari database
        $kritiksaran = KritikdanSaran::all(); // Perbaiki nama variabel di sini

        return view('admin.kritiksaran.index', compact('kritiksaran'));
    }

    public function destroy($id)
    {
        // Cari pesan berdasarkan ID
        $KritikdanSaran = KritikdanSaran::findOrFail($id);

        // Hapus pesan
        $KritikdanSaran->delete();

        return redirect()->route('admin.kritiksaran.index')->with('success', 'Pesan berhasil dihapus.');
    }
}
