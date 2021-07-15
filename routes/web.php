<?php

use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
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

Route::get('/', function () {
    return view('v_dashboardadmin');
});


Route::resource('/home', HomeController::class);

// Route::get('home', [HomeController::class , 'index'])->name('home');
Route::get('/siswa_kelas_X',[AdminController::class,'index'])->name('Admin');




Route::get('/dataguru',[GuruController::class,'index']);
Route::get('/dataguru/detail/{nip}',[GuruController::class,'detail']);
Route::get('/dataguru/add',[GuruController::class,'add']);
Route::post('/dataguru/insert',[GuruController::class,'insert']);
