<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;
class PrestasiHomeController extends Controller
{
    public function index()
    {
        $prestasi = prestasi::all();
        return view('prestasi.index', compact('prestasi'));
    }
}
