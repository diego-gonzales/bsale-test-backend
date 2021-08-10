<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


// Crea los endpoints necesarios para un crud de productos
Route::apiResource('products', ProductController::class);

// Ruta extra creada para obtener la lista de productos según su categoría
Route::get('category/{category}', [ProductController::class, 'category']);

// Crea los endpoints necesarios para un crud de categorias
Route::apiResource('categories', CategoryController::class);
