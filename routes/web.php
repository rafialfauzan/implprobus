<?php

use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;

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

// Route::get('/',[HomeController::class,'index'])->middleware(['auth'])->name('home');

Route::get('/dashboard',[HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/detailrequest',[HomeController::class, 'detailrequest'])->middleware(['auth'])->name('detailrequest');
Route::get('/detailus', [HomeController::class, 'detailus'])->middleware(['auth'])->name('detailus');

Route::get('/user', [UserController::class, 'index'])->middleware(['auth'])->name('user');
Route::get('/registeracc',[UserController::class, 'registeracc'])->middleware(['auth'])->name('registeracc');
Route::get('/editacc',[UserController::class, 'editacc'])->middleware(['auth'])->name('editacc');

Route::get('/tag', [TagController::class, 'index'])->middleware(['auth'])->name('tag');
Route::get('/createtag', [TagController::class, 'createtag'])->middleware(['auth'])->name('createtag');
Route::get('/edittag', [TagController::class, 'edittag'])->middleware(['auth'])->name('edittag');
Route::post('/createtag', [TagController::class, 'store'])->middleware(['auth'])->name('storetag');
Route::post('/edittag/{id}', [TagController::class, 'updatetag'])->middleware(['auth'])->name('updatetag');

Route::get('/kategori', [KategoriController::class, 'index'])->middleware(['auth'])->name('kategori');
Route::get('/createkategori', [KategoriController::class, 'createkategori'])->middleware(['auth'])->name('createkategori');
Route::get('/editkategori', [KategoriController::class, 'editkategori'])->middleware(['auth'])->name('editkategori');
Route::post('/createkategori', [KategoriController::class, 'store'])->middleware(['auth'])->name('storekategori');
Route::post('/editkategori/{id}', [KategoriController::class, 'updatekategori'])->middleware(['auth'])->name('updatekategori');

Route::get('/status', [StatusController::class, 'index'])->middleware(['auth'])->name('status');
Route::get('/createstatus', [StatusController::class, 'createstatus'])->middleware(['auth'])->name('createstatus');
Route::get('/editstatus', [StatusController::class, 'editstatus'])->middleware(['auth'])->name('editstatus');
Route::post('/createstatus', [StatusController::class, 'store'])->middleware(['auth'])->name('storestatus');
Route::post('/updatestatus/{id}', [StatusController::class, 'updatestatus'])->middleware(['auth'])->name('updatestatus');

require __DIR__.'/auth.php';
