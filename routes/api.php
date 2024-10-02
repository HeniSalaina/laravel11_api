<?php

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware(Authenticate::using('sanctum'));

//posts
Route::apiResource('/posts', App\Http\Controllers\Api\PostController::class);

Route::post('/persegi', [App\Http\Controllers\Api\PersegiController::class,
'hitungPersegi']);

Route::post('/persegipanjang', [App\Http\Controllers\Api\LuasPersegiPanjangController::class,
'hitungPersegiPanjang']);

Route::post('/kelilingpersegipanjang', [App\Http\Controllers\Api\KelilingPersegiPanjangController::class,
'hitungKelilingPersegiPanjang']);

Route::post('/luassegitiga', [App\Http\Controllers\Api\LuasSegitigaController::class,
'hitungLuasSegitiga']);

Route::post('/kelilingsegitiga', [App\Http\Controllers\Api\KelilingSegitigaController::class,
'hitungKelilingSegitiga']);

Route::post('/luaslingkaran', [App\Http\Controllers\Api\LuasLingkaranController::class,
'hitungLuasLingkaran']);

Route::post('/kelilinglingkaran', [App\Http\Controllers\Api\KelilingLingkaranController::class,
'hitungKelilingLingkaran']);

Route::post('/volumekubus', [App\Http\Controllers\Api\VolumeKubusController::class,
'hitungVolumeKubus']);

Route::post('/permukaankubus', [App\Http\Controllers\Api\LuasPermukaanKubusController::class,
'hitungLuasPermukaanKubus']);