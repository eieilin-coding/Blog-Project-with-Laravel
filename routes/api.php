<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;


Route::apiResource('/categories', CategoryController::class);

// Route::get('/categories', [CategoryController::class, 'index']);
// Route::get('/categories/{id}', [CategoryController::class, 'show']);
// Route::post('/categories', [CategoryController::class, 'store']);
// Route::get('/categories/{id}', [CategoryController::class, 'update']);
// Route::get('/categories/{id}', [CategoryController::class, 'destroy']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
