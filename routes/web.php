<?php

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

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);
Route::get('/sobre', [MainController::class, 'sobre']);
Route::get('/blog', [MainController::class, 'blog']);
Route::get('/projetos', [MainController::class, 'projetos']);
Route::get('/contato', [MainController::class, 'contato']);
