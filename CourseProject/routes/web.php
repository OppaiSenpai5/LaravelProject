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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function (){
    return view('dashboard');
})->name('dashboard');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/animes', function () {
        return view('anime/animes');
    })->name('animes');

    Route::get('/vas', function () {
        return view('va/vas');
    })->name('vas');

    Route::get('/characters', function () {
        return view('character/characters');
    })->name('characters');

    Route::get('/anime', [AnimesController::class, 'add']);
    Route::post('/anime', [AnimesController::class, 'create']);

    Route::get('/anime/{anime}', [AnimesController::class, 'edit']);
    Route::post('/anime/{anime}', [AnimesController::class, 'update']);

    Route::get('/anime/details/{anime}', [AnimesController::class, 'details']);

    Route::get('/va', [VasController::class, 'add']);
    Route::post('/va', [VasController::class, 'create']);

    Route::get('/va/{va}', [VasController::class, 'edit']);
    Route::post('/va/{va}', [VasController::class, 'update']);

    Route::get('/character', [CharactersController::class, 'add']);
    Route::post('/character', [CharactersController::class, 'create']);

    Route::get('/character/{character}', [CharactersController::class, 'edit']);
    Route::post('/character/{character}', [CharactersController::class, 'update']);
});
