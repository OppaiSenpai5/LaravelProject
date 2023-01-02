<?php

use App\Http\Controllers\AnimesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/anime', [AnimesController::class, 'add']);
    Route::post('/anime', [AnimesController::class, 'create']);

    Route::get('/anime/{anime}', [AnimesController::class, 'edit']);
    Route::post('/anime/{anime}', [AnimesController::class, 'update']);
});
