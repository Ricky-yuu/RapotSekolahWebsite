<?php

use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\DashboardguruController;
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


Route::resource('/', HomeController::class);

// Route::get('home', [HomeController::class , 'index'])->name('home');


Route::get('/dataguru',[GuruController::class,'index'])->name('dataguruindex');
Route::get('/dataguru/detail/{nip}',[GuruController::class,'detail']);
Route::get('/dataguru/add',[GuruController::class,'add']);
Route::post('/dataguru/insert',[GuruController::class,'insert']);
Route::get('/dataguru/edit/{nip}',[GuruController::class,'edit']);
Route::post('/dataguru/update/{nip}',[GuruController::class,'update']);
Route::get('/dataguru/delete/{nip}',[GuruController::class,'delete']);


Route::get('/siswa_kelas_X',[SiswaController::class,'index'])->name('siswa');
Route::get('/datasiswa/siswa_kelas_X/{nis}',[SiswaController::class,'detail']);
Route::get('/datasiswa/add',[SiswaController::class,'add']);
Route::post('/datasiswa/insert',[SiswaController::class,'insert']);
Route::get('/datasiswa/delete/{nis}',[SiswaController::class,'delete']);

Route::get('/dashboardguru',[DashboardguruController::class,'index'])->name('guru');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


