<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Guru;
use App\Models\User; // Pastikan Anda mengimpor model User

class GuruController extends Controller
{
    /**
     * Menampilkan daftar data guru.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::all();
        return view('admin.guru.index', compact('guru'));
    }

    /**
     * Menampilkan form untuk membuat data guru baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all(); // Ambil semua data user
        return view('admin.guru.create', compact('users'));
    }

    /**
     * Menyimpan data guru baru ke dalam penyimpanan.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bidang_keahlian' => 'required',
            'pengalaman' => 'required',
            'pendidikan' => 'required',
            'no_telephon' => 'required|max:20',
            'user_id' => 'required|exists:users,id'
        ]);
    
        Guru::create([
            'bidang_keahlian' => $request->bidang_keahlian,
            'pengalaman' => $request->pengalaman,
            'pendidikan' => $request->pendidikan,
            'no_telephon' => $request->no_telephon,
            'user_id' => $request->user_id
        ]);
    
        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil ditambahkan');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'bidang_keahlian' => 'required',
            'pengalaman' => 'required',
            'pendidikan' => 'required',
            'no_telephon' => 'required|max:20',
            'user_id' => auth()->user()->id,
        ]);

        $guru->update([
            'bidang_keahlian' => $request->bidang_keahlian,
            'pengalaman' => $request->pengalaman,
            'pendidikan' => $request->pendidikan,
            'no_telephon' => $request->no_telephon,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru)
    {
        $guru->delete();

        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil dihapus');
    }

}
