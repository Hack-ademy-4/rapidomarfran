<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;

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

//visualizacion anuncio de ususario no registrado
Route::get('/', [PublicController::class,'index'])->name('home');

//anuncio relacionado con categoria
Route::get('/category/{name}/{id}/announcements', [PublicController::class,'announcementsByCategory'])->name('category.announcements');

//web detalle
Route::get('/announcement/{id}', [HomeController::class,'details'])->name('announcement.details');

//revisor
Route::get('/revisor',[RevisorController::class,'index'] )->name('revisor.home');

//revisor acepta-rechaza
Route::post('/revisor/announcement/{id}/accept',[RevisorController::class,'accept'])->name('revisor.announcement.accept');
Route::post('/revisor/announcement/{id}/reject',[RevisorController::class,'reject'])->name('revisor.announcement.reject');

//banderas
Route::post('/locale/{locale}', [PublicController::class,'locale'])->name('locale');