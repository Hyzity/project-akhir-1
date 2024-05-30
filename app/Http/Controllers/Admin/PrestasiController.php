<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prestasi;
use App\Services\SummernoteService;
use App\Services\UploadService;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\View\Factory;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Auth;
class PrestasiController extends Controller
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
        $prestasi = prestasi::all();
        return view('admin.prestasi.index', compact('prestasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.prestasi.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $filename = null;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('img/prestasi');

            if (!file_exists($destinationPath)) {
                mkdir($destinationPath, 0755, true);
            }

            $file->move($destinationPath, $filename);
        }
        $user_id = Auth::id();
        Prestasi::create([
            'deskripsi' => $request->deskripsi,
            'judul' => $request->judul,
            'gambar' => $filename ? $filename : null,
            'user_id' => $user_id,
        ]);

        return redirect()->route('admin.prestasi.index')->with('success', 'Prestasi berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prestasi = Prestasi::find($id);
        if (!$prestasi) {
            return redirect()->route('admin.prestasi.index')->with('error', 'Data not found');
        }
        return view('admin.prestasi.edit', compact('prestasi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prestasi = Prestasi::find($id);
        if (!$prestasi) {
            return redirect()->route('admin.prestasi.index')->with('error', 'Data not found');
        }

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:png,jpg,gif,jpeg,svg,webp,jfif|max:2048'
        ]);
        $user_id = Auth::id();


        try {
            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('img/prestasi'), $filename);

                if ($prestasi->gambar) {
                    $oldImagePath = public_path('img/prestasi/' . $prestasi->gambar);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                $prestasi->gambar = $filename;
            }

            $prestasi->judul = $request->input('judul');
            $prestasi->deskripsi = $request->input('deskripsi');
            $prestasi->user_id = $user_id;

            $prestasi->save();

            return redirect()->route('admin.prestasi.index')->with('success', 'Data updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Fitur ini belum dikembangkan oleh developer. Mohon bersabar.');
        }
    }

    public function destroy($id)
    {
        $prestasi = Prestasi::find($id);
        if (!$prestasi) {
            return redirect()->route('admin.prestasi.index')->with('error', 'Data tidak ditemukan');
        }

        try {
            if ($prestasi->gambar) {
                $imagePath = public_path('img/prestasi/' . $prestasi->gambar);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }

            $prestasi->delete();

            return redirect()->route('admin.prestasi.index')->with('success', 'Data deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Penghapusan data gagal. Silahkan coba lagi nanti.');
        }
    }
}
