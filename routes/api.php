<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/list-produk', [ProductController::class, 'listProduct']);
Route::post('/insert-produk', [ProductController::class, 'insertProduct']);
Route::delete('/delete-produk/{id}', [ProductController::class, 'deleteProduct']);
Route::put('/update-produk/{id}', [ProductController::class, 'updateProduct']);
