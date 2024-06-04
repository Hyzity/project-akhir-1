<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;

class PrestasiController extends Controller
{
    public function index()
    {
        $prestasi = prestasi::all();
        return view('prestasi.index', compact('prestasi'));
    }

    public function show($id)
    {
        $prestasi = Prestasi::findOrFail($id);
        return view('prestasi.show', compact('prestasi'));
    }

}
