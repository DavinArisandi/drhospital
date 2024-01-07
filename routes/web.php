<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\DokterController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/home',[HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/view_tambah_dokter',[AdminController::class, 'addview']);
Route::post('/upload_dokter',[AdminController::class, 'upload']);

Route::get('/show_janji',[AdminController::class, 'show_janji']);
Route::get('/approved/{id}',[AdminController::class, 'approved']);
Route::get('/canceled/{id}',[AdminController::class, 'canceled']);

Route::get('/show_dokter',[AdminController::class, 'show_dokter']);
Route::get('/delete_dokter/{id}',[AdminController::class, 'delete_dokter']);

Route::get('/update_dokter/{id}',[AdminController::class, 'update_dokter']);
Route::post('/edit_dokter/{id}',[AdminController::class, 'edit_dokter']);

Route::post('/buatjanji',[HomeController::class, 'buatjanji']);
Route::get('/myappointment',[HomeController::class, 'myappointment']);
Route::get('/batalkan_janji/{id}',[HomeController::class, 'batalkan_janji']);
Route::get('/aboutus',[HomeController::class, 'aboutus']);
Route::get('/doctors',[HomeController::class, 'doctors']);

Route::get('/about',[AboutController::class, 'index']);

Route::get('/doctors',[DokterController::class, 'index']);