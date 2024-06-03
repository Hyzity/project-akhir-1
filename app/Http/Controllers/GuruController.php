<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Guru;

class GuruController extends Controller
{
    public function index()
    {
    	$guru = Guru::with(['user'])->latest()->paginate(50);
    	return view('guru.index',compact('guru'));
    }

    public function show($id)
    {
        $guru = Guru::findOrFail($id);
    	return view('guru.show',compact('guru'));
    }
}
