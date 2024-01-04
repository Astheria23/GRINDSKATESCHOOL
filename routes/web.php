<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/test', function () {
    return view('user.homereal');
});

Route::get('/test-login', function () {
    return view('user.login-user');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/index', function () {
        return view('index');
});
// Yang dibuka user / client
    Route::get('/datasiswa','App\Http\Controllers\testController@read')->name('daftarsiswa');
    Route::get('/formDaftar','App\Http\Controllers\testController@create')->name('formDaftar');
    Route::post('/siswa/store','App\Http\Controllers\testController@store');
    Route::get('/formEdit/{id}', 'App\Http\Controllers\testController@edit');
    Route::post('/siswa/update/{id}', 'App\Http\Controllers\testController@update');
    Route::get('/siswa/delete/{id}', 'App\Http\Controllers\testController@destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
