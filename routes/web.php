<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'homePage']);

Route::get('/daftarSiswa', [SiswaController::class, 'Siswa']);



Route::middleware(['auth'])->group(function()
{
  Route::get('/murid/create', [SiswaController::class, 'create']);
  Route::post('/murid/create', [SiswaController::class, 'saveData']);

  Route::get('/murid/{id}/edit', [SiswaController::class, 'edit']);
  Route::put('/murid/{id}/', [SiswaController::class, 'update']);

  Route::delete('/murid/{id}/', [SiswaController::class, 'destroy']);
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
