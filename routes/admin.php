<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\KritikSaranController;

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::name('admin.')->group(function () {
        Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
        Route::get('/jadwal/showhari/{id}', [JadwalController::class, 'showhari'])->name('jadwal.showhari');
        Route::get('/jadwal/createkelas', [JadwalController::class, 'createKelas'])->name('jadwal.createKelas');
        Route::get('/jadwal/createhari/{id}', [JadwalController::class, 'createHari'])->name('jadwal.createHari');
        Route::get('/jadwal/createpelajaran/{id}/{idkelas}', [JadwalController::class, 'createPelajaran'])->name('jadwal.createPelajaran');
        
        Route::post('/jadwal/createkelas', [JadwalController::class, 'storeKelas'])->name('jadwal.storeKelas');
        Route::post('/jadwal/createPelajaran', [JadwalController::class, 'storePelajaran'])->name('jadwal.storePelajaran');
        Route::get('/jadwal/destroyKelas/{id}', [JadwalController::class, 'destroyKelas'])->name('jadwal.destroyKelas');
        
        Route::get('/jadwal/destroyPelajaran/{id}', [JadwalController::class, 'destroyPelajaran'])->name('jadwal.destroyPelajaran');
        Route::get('/jadwal/editkelas/{id}', [JadwalController::class, 'editKelas'])->name('jadwal.editKelas');
        
        Route::get('/jadwal/editPelajaran/{id}', [JadwalController::class, 'editPelajaran'])->name('jadwal.editPelajaran');
        Route::put('/jadwal/editkelas/{id}', [JadwalController::class, 'updateKelas'])->name('jadwal.updateKelas');

        Route::put('/jadwal/editPelajaran/{id}', [JadwalController::class, 'updatePelajaran'])->name('jadwal.updatePelajaran');
    });
});
