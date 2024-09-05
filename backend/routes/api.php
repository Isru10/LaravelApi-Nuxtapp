<?php

use App\Http\Controllers\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/blogs' , [BlogController::class,'index']);
Route::get('/blogs/{id}/edit' , [BlogController::class,'edit']);
Route::post('/blogs/{id}/edit' , [BlogController::class,'update']);

Route::delete('/blogs/{id}/delete' , [BlogController::class,'destroy']);
Route::post('/blogs' , [BlogController::class,'store']);
Route::get('/blogs/{id}' , [BlogController::class,'show']);
