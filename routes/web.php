<?php
use App\Http\Controllers\ManufakturController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('manufaktur', ManufakturController::class);



// Halaman pengantar
Route::get('/pemeriksaan-awal', function () {
    return view('manufaktur.pengantar');
})->name('pengantar');

// Halaman form utama (pastikan ini sudah ada)
Route::get('/manufaktur/create', [App\Http\Controllers\ManufakturController::class, 'create'])->name('manufaktur.create');



