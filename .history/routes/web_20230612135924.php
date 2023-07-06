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


Route::get('/datalokasii', function () {
    return view('datalokasii');
});

use App\Http\Controllers\lokasiiController;
Route::controller(lokasiiController::class)->group(function() {
    Route::get('lokasii/', 'index');
    Route::get('lokasii/add', 'add');
    Route::post('lokasii/store', 'store');
    Route::get('lokasii/edit/{id}', 'edit');
    Route::post('lokasii/update/{id}', 'update');
    Route::get('lokasii/delete/{id}', 'delete');
});
use App\Http\Controllers\kriteriaController;
Route::controller(kriteriaController::class)->group(function() {
    Route::get('kriteria/', 'index');
    Route::get('kriteria/add', 'add');
    Route::post('kriteria/store', 'store');
    Route::get('kriteria/edit/{id}', 'edit');
    Route::post('kriteria/update/{id}', 'update');
    Route::get('kriteria/delete/{id}', 'delete');
});

Route::get('/hitung', [HitungController::class, 'hitung'])->name('hitung');


