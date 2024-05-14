<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Services\SummernoteService;
use App\Services\UploadService;
use App\Models\User;

class FasilitasController extends Controller
{

    private $summernoteService;
    private $uploadService;

    public function __construct(SummernoteService $summernoteService, UploadService $uploadService)
    {
        $this->summernoteService = $summernoteService;
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
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'nama_fasilitas' => 'required|string|max:255',
            'foto_fasilitas' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'user_id' => 'nullable|exists:users,id'
        ]);
    
        // Upload file
        if ($request->hasFile('foto_fasilitas')) {
            $file = $request->file('foto_fasilitas');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/foto_fasilitas', $filename); // Pastikan jalur penyimpanan sesuai
        }
    
        // Buat fasilitas baru
        Fasilitas::create([
            'deskripsi' => $this->summernoteService->imageUpload('artikel'),
            'nama_fasilitas' => $request->nama_fasilitas,
            'foto_fasilitas' => $this->uploadService->imageUpload('artikel'),
            'user_id' => $request->user_id, // Tambahkan user_id jika ada
        ]);
    
        // Redirect dengan pesan sukses
        return redirect()->route('admin.fasilitas.index')->with('success', 'Fasilitas berhasil ditambahkan');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(Fasilitas $fasilitas)
    {
        return view('admin.fasilitas.show', compact('fasilitas'));
    }

    public function destroy(Fasilitas $fasilitas)
    {
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
