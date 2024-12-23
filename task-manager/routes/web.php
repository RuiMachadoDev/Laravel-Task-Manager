<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [TaskController::class, 'index']);
Route::post('/tasks', [TaskController::class, 'store']);
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);