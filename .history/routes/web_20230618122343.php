
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
    Route::get('kriteriaqa/', 'index');
    Route::get('kriteriaqa/add', 'add');
    Route::post('kriteriaqa/store', 'store');
    Route::get('kriteriaqa/edit/{id}', 'edit');
    Route::post('kriteriaqa/update/{id}', 'update');
    Route::get('kriteriaqa/delete/{id}', 'delete');
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

use App\Http\Controllers\hitungController;
Route::get('/hitung', [hitungController::class, 'hitung'])->name('hitung');


