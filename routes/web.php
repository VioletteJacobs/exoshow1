<?php

use App\Http\Controllers\IngredientController;
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

Route::get('/', [IngredientController::class, 'index']);
Route::get('/create', [IngredientController::class, 'create']);
Route:: post ('/add_ingredient', [IngredientController::class, 'store']);
Route::post ('/destroy_ingredient/{id}', [IngredientController::class, 'destroy']);
Route::get('/show_ingredient/{id}', [IngredientController::class, 'show']);