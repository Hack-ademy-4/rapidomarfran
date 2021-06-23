<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home');

//nuevo anuncio
Route::get('/announcement/new', [HomeController::class,'newAnnouncement'])->name('announcement.new');
Route::post('/announcement/create', [HomeController::class,'createAnnouncement'])->name('announcement.create');