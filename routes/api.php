<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorsController;
use App\Http\Controllers\GenresController;

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

Route::get('/directors', [DirectorsController::class, 'index']);
Route::get('/directors/{id}', [DirectorsController::class, 'show']);
Route::post('/directors', [DirectorsController::class, 'store']);
Route::delete('/directors/{id}', [DirectorsController::class, 'delete']);
Route::put('/directors/{id}', [DirectorsController::class, 'update']);

Route::get('/genres', [GenresController::class, 'index']);
Route::get('/genres/{id}', [GenresController::class, 'show']);
Route::delete('/genres/{id}', [GenresController::class, 'delete']);

Route::put('/genres/{id}', [GenresController::class, 'update']);

Route::post('/genres', [GenresController::class, 'store']);
