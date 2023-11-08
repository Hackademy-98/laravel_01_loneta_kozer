<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SerieController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',function(){
    return view('index');
})->name('home');

// rotta per i film
Route::get('/films',[FilmController::class,'index'])->name('index.films');
Route::get('/films/detail/{id}',[FilmController::class,'show'] )->name('show.films');

Route::get('/series',[SerieController::class,'index'])->name('index.series');
   

// rotta della pagina del detaglio delle serie TV
Route::get('/serie/detail/{id}',[SerieController::class,'show'])->name('show.series');

// rotta per visuualizzareun form per conttatare
Route::get('/contact-us',[PublicController::class,'form'])->name('form');
Route::post('/contact-email',[PublicController::class,'sendEmail'])->name('send.email');

// rotta per visualizzazione del forum per la creazione del film
Route::get('/movie/create',[FilmController::class,'create'])->name('create.movie');
Route::post('/movie/store',[FilmController::class,'store'])->name('store.movie');

// rotta per visualizzare del form per la creazione delle serie
Route::get('/serie/create',[SerieController::class,'create'])->name('create.serie');
Route::post('/serie/store',[SerieController::class,'store'])->name('store.serie');