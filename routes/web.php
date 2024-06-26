<?php

use Illuminate\Support\Facades\Route;

//Admin Namespace
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ChangePasswordController;

use App\Http\Controllers\Admin\UsersController;




//Controllers Namespace
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KritikSaranController;

use App\Http\Controllers\PrestasiHomeController;
use App\Models\Fasilitas;

require __DIR__ . '/admin.php';

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
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('sejarah');
Route::get('/visimisi', [HomeController::class, 'visimisi'])->name('visimisi');
Route::get('/akreditas', [HomeController::class, 'akreditas'])->name('akreditas');
Route::get('/ekstrakurikuler', [HomeController::class, 'ekstrakurikuler'])->name('ekstrakurikuler');
// Route::get('/contact',[HomeController::class,'contact'])->name('contact');
// Route::post('/contact', [HomeController::class, 'storeContact'])->name('contact.store');

//Pengumuman
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/pengumuman/{pengumuman:id}', [PengumumanController::class, 'show'])->name('pengumuman.show');

//kritiksaran
Route::get('/kritiksaran', [KritikSaranController::class, 'create'])->name('kritiksaran');
Route::post('/kritiksaran', [KritikSaranController::class, 'store'])->name('kritiksaran.store');

//guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/guru/nonAktif', [GuruController::class, 'nonAktif'])->name('guru.nonAktif');
Route::get('/guru/show/{id}', [GuruController::class, 'show'])->name('guru.show');
// Route::get('/login',[AuthController::class,'index'])->name('login');

//fasilitas
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/fasilitas/show/{id}', [FasilitasController::class, 'show'])->name('fasilitas.show');

//prestasi
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi');
Route::get('/prestasi/{prestasi:id}', [PrestasiController::class, 'show'])->name('prestasi.show');


// Route::get('',[FasilitasController::class,'index'])->name('fasilitas.show');
// jadwal
Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');
Route::get('/jadwal/showhari/{id}', [JadwalController::class, 'show'])->name('jadwal.show');


Route::get('admin/guru/activate/{id}', [App\Http\Controllers\Admin\GuruController::class, 'activate'])->name('admin.guru.activate');
Route::get('admin/guru/deactivate/{id}', [App\Http\Controllers\Admin\GuruController::class, 'deactivate'])->name('admin.guru.deactivate');


//agenda
// Route::get('/agenda',[AgendaController::class,'index'])->name('agenda');
// Route::get('/agenda/show/{id}',[AgendaController::class,'show'])->name('agenda.show');


//Admin
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth']], function () {
	Route::name('admin.')->group(function () {

		Route::get('/', [AdminController::class, 'index'])->name('index');
		Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
		Route::get('/change-password', [ChangePasswordController::class, 'index'])->name('change-password.index');
		Route::get('admin/prestasi', [PrestasiController::class, 'index'])->name('admin.prestasi.index');
		Route::get('admin/fasilitas/{fasilitas}/edit', [FasilitasController::class, 'edit'])->name('admin.fasilitas.edit');
		Route::put('/admin/pengumuman/{id}', [PengumumanController::class, 'update'])->name('admin.pengumuman.update');
		Route::get('/kritiksaran', [App\Http\Controllers\Admin\KritikSaranController::class, 'index'])->name('kritiksaran.index');
		Route::delete('/kritiksaran/{id}', [App\Http\Controllers\Admin\KritikSaranController::class, 'destroy'])->name('kritiksaran.destroy');

		//Resource Controller
		Route::resource('users', 'UsersController');
		Route::resource('pengumuman', 'PengumumanController');
		Route::resource('agenda', 'AgendaController');
		Route::resource('artikel', 'ArtikelController');
		Route::resource('kategori-artikel', 'KategoriArtikelController');
		Route::resource('guru', 'GuruController');
		Route::resource('fasilitas', 'FasilitasController');
		Route::resource('prestasi', 'PrestasiController');
		Route::resource('jadwal', 'JadwalController');
		Route::resource('agenda', 'AgendaController');
	});
});
