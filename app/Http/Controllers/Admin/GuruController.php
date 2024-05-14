<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\User;

class GuruController extends Controller
{
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
        // Validate the request data
        $request->validate([
            'nama' => 'required',
            'bidang_keahlian' => 'required',
            'pengalaman' => 'required',
            'pendidikan' => 'required',
            'no_telephon' => 'required|max:20',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Add validation for photo
            'user_id' => 'required|exists:users,id'
        ]);
        
        // Upload foto
        $foto = $request->file('foto')->store('public/foto_guru');

        // Create a new Guru instance and store it in the database
        Guru::create([
            'nama'=>$request->nama,
            'bidang_keahlian' => $request->bidang_keahlian,
            'pengalaman' => $request->pengalaman,
            'pendidikan' => $request->pendidikan,
            'no_telephon' => $request->no_telephon,
            'foto' => $foto, // Store the photo path in database
            'user_id' => $request->user_id
        ]);

        // Redirect back with success message
        return redirect()->route('admin.guru.index')->with('success', 'Data guru berhasil ditambahkan');
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
            'nama'=>$request->nama,
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
