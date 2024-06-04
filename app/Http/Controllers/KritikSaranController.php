<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KritikdanSaran;

class KritikSaranController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'isi' => 'required',
        ]);

        // Simpan pesan ke database
        KritikdanSaran::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'isi' => $request->isi,
        ]);

        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim.');
    }
    public function create()
    {
        // Kode Anda untuk menangani permintaan
        return view('kritiksaran.create');
    }
}

