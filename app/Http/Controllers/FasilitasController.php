<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Fasilitas;

class FasilitasController extends Controller
{
    public function index()
    {
    	$fasilitas = Fasilitas::with(['user'])->latest()->paginate(4);
    	return view('fasilitas.index',compact('fasilitas'));
    }

    public function show($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
    	return view('fasilitas.show',compact('faslitas'));
    }
}
