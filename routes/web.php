<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\UpdateSystemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StatusController;
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
Route::get('/activitylog', [HomeController::class, 'activitylog'])->middleware(['auth'])->name('activitylog');

Route::get('/detailrequest',[RequestController::class, 'detailrequest'])->middleware(['auth'])->name('detailrequest');
Route::get('/mrq', [RequestController::class, 'mrq'])->middleware(['auth'])->name('mrq');
Route::get('/createrq', [RequestController::class, 'createrq'])->middleware(['auth'])->name('createrq');
Route::get('/editrq', [RequestController::class, 'editrq'])->middleware(['auth'])->name('editrq');

Route::get('/detailus', [UpdateSystemController::class, 'detailus'])->middleware(['auth'])->name('detailus');
Route::get('/mus', [UpdateSystemController::class, 'mus'])->middleware(['auth'])->name('mus');
Route::get('/createus', [UpdateSystemController::class, 'createus'])->middleware(['auth'])->name('createus');
Route::get('/editus',[UpdateSystemController::class, 'editus'])->middleware(['auth'])->name('editus');

Route::get('/myreq', [MyController::class, 'index'])->middleware(['auth'])->name('myreq');
Route::get('/myproc', [MyController::class, 'myproc'])->middleware(['auth'])->name('myproc');
Route::get('/myus',[MyController::class, 'myus'])->middleware(['auth'])->name('myus');

Route::get('/user', [UserController::class, 'index'])->middleware(['auth'])->name('user');
Route::get('/registeracc',[UserController::class, 'registeracc'])->middleware(['auth'])->name('registeracc');
Route::post('/registeracc',[UserController::class, 'store'])->middleware(['auth'])->name('storeacc');
Route::get('/editacc/{id}',[UserController::class, 'editacc'])->middleware(['auth'])->name('editacc');
Route::post('/editacc/{id}',[UserController::class, 'edit'])->middleware(['auth'])->name('updateacc');
Route::get('/editpass/{id}', [UserController::class, 'editpass'])->middleware(['auth'])->name('editpass');
Route::get('/deleteacc/{id}',[UserController::class, 'delete'])->middleware(['auth'])->name('deleteacc');

Route::get('/tag', [TagController::class, 'index'])->middleware(['auth'])->name('tag');
Route::get('/createtag', [TagController::class, 'createtag'])->middleware(['auth'])->name('createtag');
Route::get('/edittag/{id}', [TagController::class, 'edittag'])->middleware(['auth'])->name('edittag');
Route::post('/createtag', [TagController::class, 'store'])->middleware(['auth'])->name('storetag');
Route::post('/edittag/{id}', [TagController::class, 'updatetag'])->middleware(['auth'])->name('updatetag');
Route::get('/deletetag/{id}', [TagController::class, 'delete'])->middleware(['auth'])->name('deletetag');

Route::get('/kategori', [KategoriController::class, 'index'])->middleware(['auth'])->name('kategori');
Route::get('/createkategori', [KategoriController::class, 'createkategori'])->middleware(['auth'])->name('createkategori');
Route::get('/editkategori/{id}', [KategoriController::class, 'editkategori'])->middleware(['auth'])->name('editkategori');
Route::post('/createkategori', [KategoriController::class, 'store'])->middleware(['auth'])->name('storekategori');
Route::post('/editkategori/{id}', [KategoriController::class, 'updatekategori'])->middleware(['auth'])->name('updatekategori');
Route::get('/deletekategori/{id}',[KategoriController::class, 'delete'])->middleware(['auth'])->name('deletekategori');

Route::get('/status', [StatusController::class, 'index'])->middleware(['auth'])->name('status');
Route::get('/createstatus', [StatusController::class, 'createstatus'])->middleware(['auth'])->name('createstatus');
Route::get('/editstatus/{id}', [StatusController::class, 'editstatus'])->middleware(['auth'])->name('editstatus');
Route::post('/createstatus', [StatusController::class, 'store'])->middleware(['auth'])->name('storestatus');
Route::post('/editstatus/{id}', [StatusController::class, 'updatestatus'])->middleware(['auth'])->name('updatestatus');
Route::get('/deletestatus/{id}',[StatusController::class, 'delete'])->middleware(['auth'])->name('deletestatus');

require __DIR__.'/auth.php';
