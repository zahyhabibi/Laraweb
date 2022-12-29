<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;

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


//Create
Route::get('/mahasiswa/create',[MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store',[MahasiswaController::class, 'store']);
//Read
Route::get('/mahasiswa',[MahasiswaController::class, 'index']);
//Update
Route::get('/mahasiswa/{Npm}/edit',[MahasiswaController::class, 'edit']);
Route::post('/mahasiswa/{Npm}/update',[MahasiswaController::class, 'update']);
//Delete
Route::get('/mahasiswa/{Npm}/delete',[MahasiswaController::class, 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::resource('mahasiswa', MahasiswaController::class);