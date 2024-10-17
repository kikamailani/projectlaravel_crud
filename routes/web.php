<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\DataJurusanController;
use App\Http\Controllers\Usercontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingPageController::class, 'index'])->name('landing_page');

Route::prefix('/jurusan')->name('jurusan.')->group(function () {
Route::get('/index', [DataJurusanController::class, 'index'])->name('index');
Route::get('/create', [DataJurusanController::class, 'create'])->name('create');
Route::post('/store', [DataJurusanController::class, 'store'])->name('store');
Route::delete('/destroy/{id}', [DataJurusanController::class, 'destroy'])->name('destroy');
Route::get('/edit/{id}', [DataJurusanController::class, 'edit'])->name('edit');
Route::patch('/update/{id}', [DataJurusanController::class, 'update'])->name('update');


});

Route::prefix('akun')->name('akun.')->group(function () {
    Route::get('/data', [Usercontroller::class, 'index'])->name('data');
    Route::post('/tambah', [Usercontroller::class,'store'])->name('tambah.formulir');
    Route::delete('/hapus/{id}', [Usercontroller::class, 'destroy'])->name('hapus');
    Route::get('/edit/{id}', [Usercontroller::class, 'edit'])->name('edit');
    Route::patch('/edit/{id}', [Usercontroller::class, 'update'])->name('edit.formulir');
    Route::patch('edit/stock/{id}', [Usercontroller::class, 'updateStock'])->name('edit.stok');

}
);
