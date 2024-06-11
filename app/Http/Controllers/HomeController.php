<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;
use App\Models\Artikel;
use App\Models\Pengumuman;
use App\Models\KritikdanSaran;
use App\Models\Prestasi;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home.index',[
            'artikel' => Artikel::with(['user','kategoriArtikel'])->latest()->take(2)->get(),
            'pengumuman' => Pengumuman::with(['user'])->latest()->take(4)->get(),
            'prestasi' => Prestasi::with(['user'])->latest()->take(3)->get(),
        ]);
    }

    public function visimisi()
    {
    	return view('home.visimisi');
    }

    public function akreditas()
    {
    	return view('home.akreditas');
    }

    public function sejarah()
    {
    	return view('home.sejarah');
    }

    public function ekstrakurikuler()
    {
    	return view('home.ekstrakurikuler');
    }   

    public function contact()
    {
    	return view('home.contact');
    }

    public function storeContact(Request $request){
        $validate = $request->validate([
            'nama' => 'required|min:5',
            'email' => 'required|email',
            'isi' => 'required'
        ]);
    
        KritikdanSaran::create($validate);
        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }
}


