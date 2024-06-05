<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Services\SummernoteService;
use App\Services\UploadService;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FasilitasController extends Controller
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
        $fasilitas = Fasilitas::all();
        return view('admin.fasilitas.index', compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.fasilitas.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // }

    public function edit($id)
    {
        $fasilitas = Fasilitas::find($id);
        if (!$fasilitas) {
            return redirect()->route('admin.fasilitas.index')->with('error', 'Data not found');
        }
        return view('admin.fasilitas.edit', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_fasilitas' => 'required',
            'deskripsi' => 'required',
            'foto_fasilitas' => 'sometimes|image',
        ]);

        $fasilitas = Fasilitas::findOrFail($id);
        $validatedData['user_id'] = Auth::user()->id ?? null;

        if ($request->hasFile('foto_fasilitas')) {
            // Delete the old file
            $filePath = public_path('uploads/img/fasilitas/' . $fasilitas->foto_fasilitas);
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            $file = $request->file('foto_fasilitas');
            $namaFile = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('uploads/img/fasilitas'), $namaFile);

            $validatedData['foto_fasilitas'] = $namaFile;
        }

        $fasilitas->update($validatedData);

        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas berhasil diperbarui');
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_fasilitas' => 'required',
            'deskripsi' => 'required',
            'foto_fasilitas' => 'required|image',
        ]);

        $validatedData['user_id'] = Auth::user()->id ?? null;

        if ($request->hasFile('foto_fasilitas')) {
            $file = $request->file('foto_fasilitas');
            $namaFile = time() . "_" . $file->getClientOriginalName();
            $file->move(public_path('uploads/img/fasilitas'), $namaFile);

            $validatedData['foto_fasilitas'] = $namaFile;
        }

        Fasilitas::create($validatedData);

        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas berhasil disimpan');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Fetch the fasilitas data with the specified ID
        $fasilitas = Fasilitas::findOrFail($id);

        // Return the view to display the fasilitas data
        return view('admin.fasilitas.show', compact('fasilitas'));
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        // Delete the file from the storage
        $filePath = public_path('uploads/img/fasilitas/' . $fasilitas->foto_fasilitas);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $fasilitas->delete();

        return redirect()->route('admin.fasilitas.index')->with('success', 'Data fasilitas berhasil dihapus');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
}
