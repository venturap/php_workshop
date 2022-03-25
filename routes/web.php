<?php

use App\Http\Controllers\WelcomeController;
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

Route::get('xyz', function () {
    return 'Hello World!';
});

Route::get('/greeting', [WelcomeController::class, 'index']);
Route::get('/goodbye', [WelcomeController::class, 'shutdown']);

