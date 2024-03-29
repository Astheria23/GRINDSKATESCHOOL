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

Route::get('/', function () {
    return view('user.home2');
});

Route::get('/home2', function () {
    return view('user.home2');
});
Route::get('/test-login', function () {
    return view('user.login-user');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dataTrial','App\Http\Controllers\TrialController@read')->name('dataTrial');
Route::get('/trialDaftar','App\Http\Controllers\TrialController@create')->name('trialDaftar');
Route::post('/dataTrial','App\Http\Controllers\TrialController@store')->name('trialDaftar');
Route::delete('/dataTrial/delete/{id}', 'App\Http\Controllers\TrialController@destroy');

Route::middleware('auth')->group(function () {
    Route::get('/index', function () {
        return view('index');
});
// Yang dibuka admin
    Route::get('/datasiswa','App\Http\Controllers\testController@read')->name('daftarsiswa');
    Route::get('/formDaftar','App\Http\Controllers\testController@create')->name('formDaftar');
    Route::post('/siswa/store','App\Http\Controllers\testController@store');
    Route::get('/formEdit/{id}', 'App\Http\Controllers\testController@edit');
    Route::post('/siswa/update/{id}', 'App\Http\Controllers\testController@update');
    Route::get('/siswa/delete/{id}', 'App\Http\Controllers\testController@destroy');
});
//Yang dibuka User / client pendaftar

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
