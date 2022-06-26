<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BabController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\SubBabController;

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
    return view('index');
});

Route::resource('/siswas', SiswaController::class);

Route::resource('/mapels', MapelController::class);

Route::resource('/babs', BabController::class);

Route::resource('/subbabs', SubBabController::class);

Route::resource('/soals', SoalController::class);

