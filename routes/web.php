<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('kriteria', 'App\Http\Controllers\KriteriaController')->except(['create']);
Route::resource('alternatif', 'App\Http\Controllers\AlternatifController')->except(['create']);
Route::resource('crips', 'App\Http\Controllers\CripsController')->except(['index','create','show']);
// Route::get('/penilaian', [App\Http\Controllers\PenilaianController::class, 'index'])->name('penilaian.index');
Route::resource('/penilaian', 'App\Http\Controllers\PenilaianController');
Route::resource('user', 'App\Http\Controllers\UserController')->except(['create']);
Route::get('/laporan', function () {
    return view('admin.report.index');
})->name('laporan');

Route::get('/perhitungan', [App\Http\Controllers\AlgoritmaController::class, 'index'])->name('perhitungan.index');
Route::get('download-perhitungan-pdf', [App\Http\Controllers\AlgoritmaController::class, 'downloadPDF']);
Route::get('download-alternatif-pdf', [App\Http\Controllers\AlternatifController::class, 'downloadPDF']);
Route::get('download-user-pdf', [App\Http\Controllers\UserController::class, 'downloadPDF']);
Route::get('download-kriteria-pdf', [App\Http\Controllers\KriteriaController::class, 'downloadPDF']);
Route::get('/download-crips-pdf/{id}', [App\Http\Controllers\KriteriaController::class, 'downloadCripsPDF']);
Route::get('download-penilaian-pdf', [App\Http\Controllers\PenilaianController::class, 'downloadPDF']);