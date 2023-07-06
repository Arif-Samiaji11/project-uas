
<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/',[App\Http\Controllers\DashboardController::class, 'index']);


Route::get('/datalokasi', function () {
    return view('datalokasi');
});

use App\Http\Controllers\lokasiiController;
Route::controller(lokasiiController::class)->group(function() {
    Route::get('lokasi/', 'index');
    Route::get('lokasi/add', 'add');
    Route::post('lokasi/store', 'store');
    Route::get('lokasi/edit/{id}', 'edit');
    Route::post('lokasi/update/{id}', 'update');
    Route::get('lokasi/delete/{id}', 'delete');
});
use App\Http\Controllers\kriteriaController;
Route::controller(kriteriaController::class)->group(function() {
    Route::get('a/', 'index');
    Route::get('a/add', 'add');
    Route::post('a/store', 'store');
    Route::get('a/edit/{id}', 'edit');
    Route::post('a/update/{id}', 'update');
    Route::get('a/delete/{id}', 'delete');
});

use App\Http\Controllers\hitungController;
Route::get('/hitung', [hitungController::class, 'hitung'])->name('hitung');


