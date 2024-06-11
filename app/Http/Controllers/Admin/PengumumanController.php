<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengumuman = Pengumuman::with(['user'])->get();
        return view('admin.pengumuman.index',compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengumuman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->request->add([
            'tgl' => date('Y-m-d'),
            'user_id' => auth()->user()->id,
        ]);
        $request->merge([
            'deskripsi' => strip_tags($request->input('deskripsi'))
        ]);
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
        ], [
            'deskripsi.required' => 'Deskripsi tidak boleh kosong. Silahkan masukkan deskripsi.',
            'judul.required' => 'Judul tidak boleh kosong. Silahkan masukkan judul.',
        ]);
        Pengumuman::create($request->all());

        return redirect()->route('admin.pengumuman.index')->with('success','Pengumuman berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pengumuman $pengumuman)
    {
        return view('admin.pengumuman.edit',compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pengumuman $pengumuman)
    {
        $this->authorize('update',$pengumuman);

        $request->request->add([
            'tgl' => date('Y-m-d'),
            'user_id' => auth()->user()->id,
        ]);
        $request->merge([
            'deskripsi' => strip_tags($request->input('deskripsi'))
        ]);
        $request->validate([
            'deskripsi' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
        ], [
            'deskripsi.required' => 'Deskripsi tidak boleh kosong. Silahkan masukkan deskripsi.',
            'judul.required' => 'Judul tidak boleh kosong. Silahkan masukkan judul.',
        ]);
        $pengumuman->update($request->all());
           
        return redirect()->route('admin.pengumuman.index')->with('success','Pengumuman berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengumuman $pengumuman)
    {
        $this->authorize('delete',$pengumuman);
        
        $pengumuman->delete();
        return redirect()->route('admin.pengumuman.index')->with('success','Pengumuman berhasil dihapus');
    }
}
