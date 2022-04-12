<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\FilmController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/directors', [DirectorController::class, 'index']);
Route::get('/directors/{id}', [DirectorController::class, 'show']);
Route::post('/directors', [DirectorController::class, 'store']);
Route::delete('/directors/{id}', [DirectorController::class, 'delete']);
Route::put('/directors/{id}', [DirectorController::class, 'update']);

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{id}', [GenreController::class, 'show']);
Route::delete('/genres/{id}', [GenreController::class, 'delete']);
Route::put('/genres/{id}', [GenreController::class, 'update']);
Route::post('/genres', [GenreController::class, 'store']);

Route::get('/actors', [ActorController::class, 'index']);
Route::get('/actors/{id}', [ActorController::class, 'show']);
Route::delete('/actors/{id}', [ActorController::class, 'delete']);
Route::put('/actors/{id}', [ActorController::class, 'update']);
Route::post('/actors', [ActorController::class, 'store']);

Route::get('/films', [FilmController::class, 'index']);
Route::get('/films/{id}', [FilmController::class, 'show']);
Route::delete('/films/{id}', [FilmController::class, 'delete']);
Route::put('/films/{id}', [FilmController::class, 'update']);
Route::post('/films', [FilmController::class, 'store']);
