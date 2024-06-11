<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $guru =  Guru::where('status', 'aktif')->get();

        // Passing the fetched guru records to the 'guru.index' view
        return view('guru.index', compact('guru'));
    }
    public function nonAktif()
    {
        $guru = Guru::where('status', 'non_aktif')->get();
        return view('guru.index', compact('guru'));
    }

    public function show($id)
    {
        $guru = Guru::findOrFail($id);
        return view('guru.show', compact('guru'));
    }
}
