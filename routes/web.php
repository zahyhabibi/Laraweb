<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('index');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class, 'register']);

//Mahasiswa
//Create
Route::get('/mahasiswa/create',[MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class, 'store']);
//Read
Route::get('/mahasiswa',[MahasiswaController::class, 'index'])->name('mahasiswa');
//Update
Route::get('/mahasiswa/{Npm}/edit',[MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/{Npm}/update',[MahasiswaController::class, 'update']);
//Delete
Route::get('/mahasiswa/{Npm}/delete',[MahasiswaController::class, 'destroy']);
//search
Route::get('/mahasiswa/search',[MahasiswaController::class, 'cari']);


//Dosen
//create
Route::get('/dosen/create', [DosenController::class,'create']);
Route::post('/dosen/store', [DosenController::class,'store']);
//Read
Route::get('/dosen',[DosenController::class,'index'])->name('dosen');
//update
Route::get('/dosen/{Kd_dosen}/edit',[DosenController::class,'edit']);
Route::post('/dosen/{Kd_dosen}/update',[DosenController::class,'update']);
//delete
Route::get('/dosen/{Kd_dosen}/delete',[DosenController::class,'destroy']);


// relasi 1 to 1
Route::get('mahasiswa/orangtua',[MahasiswaController::class,'Ortu']);
// relasi 1 to many
Route::get('mahasiswa/dosen',[MahasiswaController::class,'dosen']);


Route::get('mahasiswa/json',[MahasiswaController::class,'json']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::resource('mahasiswa', MahasiswaController::class);