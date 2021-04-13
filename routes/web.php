<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\Deletecontroller;
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

Route::get('/', [TaskController::class, 'index']);
Route::get('/task/{task}', [TaskController::class,'show']);
Route::get('/task/{task}/delete',[DeleteController::class,'cancel']);
Route::get('/alphabet', [TaskController::class, 'indexAlphabet']);
