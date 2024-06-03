<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\User;
use App\Services\UploadService;
use Illuminate\Support\Facades\Auth;

class GuruController extends Controller
{
    protected $uploadService;

    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function index()
    {
        $guru = Guru::all();
        return view('admin.guru.index', compact('guru'));
    }

    public function create()
    {
        $users = User::all();
        return view('admin.guru.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'bidang_keahlian' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'pendidikan' => 'required',
        ]);

        try {
            $path = 'guru';
            $filename = $this->uploadService->imageUpload($path);

            $guru = new Guru();
            $guru->nama = $request->input('nama');
            $guru->bidang_keahlian = $request->input('bidang_keahlian');
            $guru->tempat_lahir = $request->input('tempat_lahir');
            $guru->tgl_lahir = $request->input('tgl_lahir');
            $guru->pendidikan = $request->input('pendidikan');
            $guru->foto = $filename;
            $guru->save();

            return redirect()->route('admin.guru.index')->with('success', 'Guru berhasil ditambahkan');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return view('admin.guru.show', compact('guru'));
    }

    public function edit(Guru $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    public function update(Request $request, Guru $guru)
    {
        $request->validate([
            'nama' => 'required',
            'bidang_keahlian' => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'pendidikan' => 'required',
        ]);

        try {
            $guru->update([
                'nama' => $request->nama,
                'bidang_keahlian' => $request->bidang_keahlian,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'pendidikan' => $request->pendidikan,
                'user_id' => Auth::id(),
            ]);

            return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan saat memperbarui data guru: ' . $e->getMessage()]);
        }
    }

    public function destroy(Guru $guru)
    {
        try {
            $guru->delete();
            return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil dihapus');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan saat menghapus data guru: ' . $e->getMessage()]);
        }
    }
}
