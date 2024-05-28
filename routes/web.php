<?php

use Illuminate\Support\Facades\Route;

//Admin Namespace
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\PrestasiController;



//Controllers Namespace
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\FasilitasController;
use App\Models\Fasilitas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home
Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/ekstrakurikuler',[HomeController::class,'ekstrakurikuler'])->name('ekstrakurikuler');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

//Artikel
Route::get('/artikel',[ArtikelController::class,'index'])->name('artikel');
Route::get('/artikel/search',[ArtikelController::class,'search'])->name('artikel.search');

Route::get('/artikel/{artikel:slug}',[ArtikelController::class,'show'])->name('artikel.show');

//Pengumuman
Route::get('/pengumuman',[PengumumanController::class,'index'])->name('pengumuman');
Route::get('/pengumuman/{pengumuman:slug}',[PengumumanController::class,'show'])->name('pengumuman.show');

//guru
Route::get('/guru',[GuruController::class,'index'])->name('guru');
Route::get('/guru/{guru:slug}',[GuruController::class,'show'])->name('guru.show');

//fasilitas
Route::get('/fasilitas',[FasilitasController::class,'index'])->name('fasilitas');
Route::get('/fasilitas/{fasilitas:slug}',[FasilitasController::class,'show'])->name('faslitas.show');


//Admin
Route::group(['namespace' => 'Admin','prefix' => 'admin','middleware' => ['auth']],function(){
	Route::name('admin.')->group(function(){
		
		Route::get('/',[AdminController::class,'index'])->name('index');
		Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
		Route::get('/change-password',[ChangePasswordController::class,'index'])->name('change-password.index');
		Route::get('admin/prestasi', [PrestasiController::class, 'index'])->name('admin.prestasi.index');
		Route::get('admin/fasilitas/{fasilitas}/edit', [FasilitasController::class, 'edit'])->name('admin.fasilitas.edit');
		Route::put('/admin/pengumuman/{id}', [PengumumanController::class, 'update'])->name('admin.pengumuman.update');


		// Rute POST untuk menyimpan data guru
		Route::post('/guru/store', [GuruController::class, 'store'])->name('guru.store');

		
		//Resource Controller
		Route::resource('users','UsersController');
		Route::resource('pengumuman','PengumumanController');
		Route::resource('agenda','AgendaController');
		Route::resource('artikel','ArtikelController');
		Route::resource('kategori-artikel','KategoriArtikelController');
		Route::resource('guru','GuruController');
		Route::resource('fasilitas','FasilitasController');
		Route::resource('prestasi','PrestasiController');

	});
});