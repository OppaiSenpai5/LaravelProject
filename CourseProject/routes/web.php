<?php

use App\Http\Controllers\AnimesController;
use App\Http\Controllers\CharactersController;
use App\Http\Controllers\VasController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware;

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


Route::middleware(['auth:sanctum','verified'])->group(function() {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/dashboard',function (){
        return view('dashboard');
    })->name('dashboard');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/animes', [AnimesController::class, 'list'])->name('animes');
    Route::get('/vas', [VasController::class, 'list'])->name('vas');
    Route::get('/characters', [CharactersController::class, 'list'])->name('characters');

    Route::get('/anime/details/{anime}', [AnimesController::class, 'details']);
    Route::get('/character/details/{character}', [CharactersController::class, 'details']);
    Route::get('/va/details/{va}', [VasController::class, 'details']);
});
