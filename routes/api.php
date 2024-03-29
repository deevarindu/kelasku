<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NilaiApiController;
use App\Http\Controllers\BabApiController;
use App\Http\Controllers\SoalApiController;
use App\Http\Controllers\MapelApiController;
use App\Http\Controllers\SiswaApiController;
use App\Http\Controllers\SubBabApiController;
use App\Http\Controllers\AuthController;

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

Route::get('siswas', [SiswaApiController::class, 'index']);
Route::get('siswas/show/{id}', [SiswaApiController::class, 'show']);
Route::post('siswas/store', [SiswaApiController::class, 'store']);
Route::post('siswas/update/{id}', [SiswaApiController::class, 'update']);
Route::get('siswas/destroy/{id}', [SiswaApiController::class, 'destroy']);

Route::post('/auth/register', [SiswaApiController::class, 'register']);
Route::post('/auth/login', [SiswaApiController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('mapels', [MapelApiController::class, 'index']);
Route::get('mapels/show/{id}', [MapelApiController::class, 'show']);
Route::post('mapels/store', [MapelApiController::class, 'store']);
Route::post('mapels/update/{id}', [MapelApiController::class, 'update']);
Route::get('mapels/destroy/{id}', [MapelApiController::class, 'destroy']);

Route::get('babs', [BabApiController::class, 'index']);
Route::get('babs/show/{id}', [BabApiController::class, 'show']);
Route::post('babs/store', [BabApiController::class, 'store']);
Route::post('babs/update/{id}', [BabApiController::class, 'update']);
Route::get('babs/destroy/{id}', [BabApiController::class, 'destroy']);

Route::get('subbabs', [SubBabApiController::class, 'index']);
Route::get('subbabs/show/{id}', [SubBabApiController::class, 'show']);
Route::post('subbabs/store', [SubBabApiController::class, 'store']);
Route::post('subbabs/update/{id}', [SubBabApiController::class, 'update']);
Route::get('subbabs/destroy/{id}', [SubBabApiController::class, 'destroy']);

Route::get('soals', [SoalApiController::class, 'index']);
Route::get('soals/show/{id}', [SoalApiController::class, 'show']);
Route::post('soals/store', [SoalApiController::class, 'store']);
Route::post('soals/update/{id}', [SoalApiController::class, 'update']);
Route::get('soals/destroy/{id}', [SoalApiController::class, 'destroy']);

Route::get('nilais', [NilaiApiController::class, 'index']);
Route::get('nilais/show/{id}', [NilaiApiController::class, 'show']);
Route::post('nilais/store', [NilaiApiController::class, 'store']);
Route::post('nilais/update/{id}', [NilaiApiController::class, 'update']);
Route::get('nilais/destroy/{id}', [NilaiApiController::class, 'destroy']);
