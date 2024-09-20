<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'index'])->middleware(['auth'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/user', [UserController::class, 'index'])->middleware(['auth'])->name('user');

Route::get('/registeracc',[UserController::class, 'registeracc'])->middleware(['auth'])->name('registeracc');

// Route::get('/homepage', function (){
//     return view('home');
// })->middleware(['auth'])->name('homepage');

require __DIR__.'/auth.php';
