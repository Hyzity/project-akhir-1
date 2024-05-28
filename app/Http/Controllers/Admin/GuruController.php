<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\User;
use App\Services\UploadService;
use App\Events\ArtikelDeleteEvent;
use App\Services\SummernoteService;
use Str;
use File;

class GuruController extends Controller
{
    protected $uploadService;

    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::all();
        return view('admin.guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.guru.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $path = 'gurus'; // Contoh path tujuan
            $filename = $this->uploadService->imageUpload($path);

            // Simpan data guru ke database (asumsi Anda memiliki model Guru)
            $guru = new Guru();
            $guru->nama = $request->input('nama');
            $guru->bidang_keahlian = $request->input('bidang_keahlian');
            $guru->pengalaman = $request->input('pengalaman');
            $guru->pendidikan = $request->input('pendidikan');
            $guru->no_telephon = $request->input('no_telephon');
            $guru->foto = $filename;  // Simpan nama file foto ke database
            $guru->save();

            // Berikan respon sukses atau lakukan hal lain yang diperlukan
            return redirect()->route('admin.guru.index')->with('success', 'Guru berhasil ditambahkan');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }




    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Fetch the guru data with the specified ID
        $guru = Guru::findOrFail($id);

        // Return the view to display the guru data
        return view('admin.guru.show', compact('guru'));
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
            'nama' => 'required',
            'bidang_keahlian' => 'required',
            'pengalaman' => 'required',
            'pendidikan' => 'required',
            'no_telephon' => 'required|max:20',
            'user_id' => auth()->user()->id,

        ]);

        $guru->update([
            'nama' => $request->nama,
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
