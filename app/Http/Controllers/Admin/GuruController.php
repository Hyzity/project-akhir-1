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
            'nama' => 'required|min:8|max:60',
            'bidang_keahlian' => 'required',
            'tempat_lahir' => 'required|min:8',
            'tgl_lahir' => 'required|date',
            'pendidikan' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5120',
            'status' => 'required|in:aktif,non_aktif',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'nama.min' => 'Nama harus terdiri dari minimal 8 karakter.',
            'nama.max' => 'Nama tidak boleh lebih dari 60 karakter.',
            'bidang_keahlian.required' => 'Bidang keahlian wajib diisi.',
            'tempat_lahir.required' => 'Tempat lahir wajib diisi.',
            'tempat_lahir.min' => 'Tempat lahir harus terdiri dari minimal 8 karakter.',
            'tgl_lahir.required' => 'Tanggal lahir wajib diisi.',
            'tgl_lahir.date' => 'Tanggal lahir harus berupa tanggal yang valid.',
            'pendidikan.required' => 'Pendidikan wajib diisi.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Gambar harus berformat: jpeg, png, jpg, gif, atau svg.',
            'image.max' => 'Ukuran gambar tidak boleh lebih dari 5 MB.',
            'status.required' => 'Status wajib dipilih.',
            'status.in' => 'Status yang dipilih tidak valid.',
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
            $guru->status = $request->input('status'); // Assign status
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
            'nama' => 'required|min:8|max:60',
            'bidang_keahlian' => 'required',
            'tempat_lahir' => 'required|min:8',
            'tgl_lahir' => 'required|date',
            'pendidikan' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:aktif,non_aktif', // Validation rule for status
        ]);

        try {
            $path = 'guru';
            $filename = $guru->foto; // Keep the old filename if no new image is uploaded

            // Check if a new image is uploaded
            if ($request->hasFile('image')) {
                $filename = $this->uploadService->imageUpload($path);
            }

            $guru->update([
                'nama' => $request->nama,
                'bidang_keahlian' => $request->bidang_keahlian,
                'tempat_lahir' => $request->tempat_lahir,
                'tgl_lahir' => $request->tgl_lahir,
                'pendidikan' => $request->pendidikan,
                'user_id' => Auth::id(),
                'foto' => $filename,
                'status' => $request->status, // Assign status
            ]);

            return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil diperbarui');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Terjadi kesalahan saat memperbarui data guru: ' . $e->getMessage()]);
        }
    }

    public function activate($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->status = 'aktif';
        $guru->save();

        return redirect()->route('admin.guru.index')->with('success', 'Status guru berhasil diaktifkan.');
    }

    public function deactivate($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->status = 'non_aktif';
        $guru->save();

        return redirect()->route('admin.guru.index')->with('success', 'Status guru berhasil dinonaktifkan.');
    }
}
