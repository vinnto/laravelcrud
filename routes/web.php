<?php

use App\Http\Controllers\CastController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Menampilkan semua data Cast
Route::get('/cast', [CastController::class, 'index'])->name('cast.index');

// Menampilkan form untuk membuat data Cast baru
Route::get('/cast/create', [CastController::class, 'create'])->name('cast.create');

// Menyimpan data baru Cast ke dalam database
Route::post('/cast', [CastController::class, 'store'])->name('cast.store');

// Menampilkan detail data Cast dengan ID tertentu
Route::get('/cast/{cast_id}', [CastController::class, 'show'])->name('cast.show');

// Menampilkan form untuk mengedit data Cast dengan ID tertentu
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit'])->name('cast.edit');

// Menyimpan perubahan data Cast (update) untuk ID tertentu
Route::put('/cast/{cast_id}', [CastController::class, 'update'])->name('cast.update');

// Menghapus data Cast dengan ID tertentu
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy'])->name('cast.destroy');