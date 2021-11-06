<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoListController;

Route::get('/', [TodoListController::class, 'index']);
Route::post('/saveTodoRoute', [TodoListController::class, 'saveTodo'])->name('saveTodo');
Route::post('/mark/{id}', [TodoListController::class, 'mark'])->name('mark');
