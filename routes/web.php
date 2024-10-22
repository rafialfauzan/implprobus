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

//Route Dashboard
Route::get('/dashboard',[HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');
Route::get('/activitylog', [HomeController::class, 'activitylog'])->middleware(['auth'])->name('activitylog');
Route::get('/mrq/{id}', [HomeController::class, 'morerq'])->middleware(['auth'])->name('morerequest');

// Route Request 
Route::get('/detailrequest/{id}',[RequestController::class, 'detailrequest'])->middleware(['auth'])->name('detailrequest');
Route::get('/mrq', [RequestController::class, 'mrq'])->middleware(['auth'])->name('mrq');
Route::get('/createrq', [RequestController::class, 'createrq'])->middleware(['auth'])->name('createrq');
Route::get('/editrq/{id}', [RequestController::class, 'editrq'])->middleware(['auth'])->name('editrq');
Route::post('/createrq',[RequestController::class, 'store'])->middleware(['auth'])->name('storerq');
Route::post('/editrq/{id}', [RequestController::class, 'updaterq'])->middleware(['auth'])->name('updaterq');
Route::get('/deleteimg/{img}', [RequestController::class, 'deleteimg'])->middleware(['auth'])->name('deleteimg');
Route::get('/updatestatus/{id}/{stid}',[RequestController::class, 'updatestatus'])->middleware(['auth'])->name('updatestatus');
Route::post('/komentar/{id}', [RequestController::class, 'komentar'])->middleware(['auth'])->name('komentar');
Route::get('/deletekomen/{id}',[RequestController::class, 'deletekomen'])->middleware(['auth'])->name('deletekomen');

//Route Update System
Route::get('/detailus/{id}', [UpdateSystemController::class, 'detailus'])->middleware(['auth'])->name('detailus');
Route::get('/mus', [UpdateSystemController::class, 'mus'])->middleware(['auth'])->name('mus');
Route::get('/createus', [UpdateSystemController::class, 'createus'])->middleware(['auth'])->name('createus');
Route::get('/editus/{id}',[UpdateSystemController::class, 'editus'])->middleware(['auth'])->name('editus');
Route::post('/createus', [UpdateSystemController::class, 'store'])->middleware(['auth'])->name('storeus');
Route::post('/editus/{id}', [UpdateSystemController::class, 'update'])->middleware(['auth'])->name('updateus');

//Route My Request
Route::get('/myreq', [MyController::class, 'index'])->middleware(['auth'])->name('myreq');
Route::get('/myproc/{id}', [MyController::class, 'myproc'])->middleware(['auth'])->name('myproc');
Route::get('/myus',[MyController::class, 'myus'])->middleware(['auth'])->name('myus');

//Route User
Route::get('/user', [UserController::class, 'index'])->middleware(['auth'])->name('user');
Route::get('/registeracc',[UserController::class, 'registeracc'])->middleware(['auth'])->name('registeracc');
Route::post('/registeracc',[UserController::class, 'store'])->middleware(['auth'])->name('storeacc');
Route::get('/editacc/{id}',[UserController::class, 'editacc'])->middleware(['auth'])->name('editacc');
Route::post('/editacc/{id}',[UserController::class, 'edit'])->middleware(['auth'])->name('updateacc');
Route::get('/editpass/{id}', [UserController::class, 'editpass'])->middleware(['auth'])->name('editpass');
Route::get('/deleteacc/{id}',[UserController::class, 'delete'])->middleware(['auth'])->name('deleteacc');
Route::post('/editpass/{id}', [UserController::class, 'updatepass'])->middleware(['auth'])->name('updatepass');

//Route Tag
Route::get('/tag', [TagController::class, 'index'])->middleware(['auth'])->name('tag');
Route::get('/createtag', [TagController::class, 'createtag'])->middleware(['auth'])->name('createtag');
Route::get('/edittag/{id}', [TagController::class, 'edittag'])->middleware(['auth'])->name('edittag');
Route::post('/createtag', [TagController::class, 'store'])->middleware(['auth'])->name('storetag');
Route::post('/edittag/{id}', [TagController::class, 'updatetag'])->middleware(['auth'])->name('updatetag');
Route::get('/deletetag/{id}', [TagController::class, 'delete'])->middleware(['auth'])->name('deletetag');

//Route Kategori
Route::get('/kategori', [KategoriController::class, 'index'])->middleware(['auth'])->name('kategori');
Route::get('/createkategori', [KategoriController::class, 'createkategori'])->middleware(['auth'])->name('createkategori');
Route::get('/editkategori/{id}', [KategoriController::class, 'editkategori'])->middleware(['auth'])->name('editkategori');
Route::post('/createkategori', [KategoriController::class, 'store'])->middleware(['auth'])->name('storekategori');
Route::post('/editkategori/{id}', [KategoriController::class, 'updatekategori'])->middleware(['auth'])->name('updatekategori');
Route::get('/deletekategori/{id}',[KategoriController::class, 'delete'])->middleware(['auth'])->name('deletekategori');

//Route Status
Route::get('/status', [StatusController::class, 'index'])->middleware(['auth'])->name('status');
Route::get('/createstatus', [StatusController::class, 'createstatus'])->middleware(['auth'])->name('createstatus');
Route::get('/editstatus/{id}', [StatusController::class, 'editstatus'])->middleware(['auth'])->name('editstatus');
Route::post('/createstatus', [StatusController::class, 'store'])->middleware(['auth'])->name('storestatus');
Route::post('/editstatus/{id}', [StatusController::class, 'updatestatus'])->middleware(['auth'])->name('updatestatus');
Route::get('/deletestatus/{id}',[StatusController::class, 'delete'])->middleware(['auth'])->name('deletestatus');

require __DIR__.'/auth.php';
