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


/* el 'apiResource' lo que hará es ahorrarme estar escribiendo ruta por ruta y lo que hace es crear las siguientes rutas:
- GET: api/produtcs -> obtendrá toda la lista de productos
- GET: api/products/{product} -> obtendrá un producto por su ID
- POST: api/products -> creará un nuevo producto
- PUT: api/products/{product} -> actualizará un producto de acuerdo a su ID
- DELETE: api/products/{product} -> eliminará un producto de acuerdo a su ID */
/**
 * @param1 nombre que le asignaremos a nuestra ruta
 * @param2 Controlador encargado de manejar esa ruta
*/
Route::apiResource('products', ProductController::class);

/* Ruta extra creada para obtener la lista de productos según su categoría:
- GET: api/category/{category} */
Route::get('category/{category}', [ProductController::class, 'category']);

/* el 'apiResource' lo que hará es ahorrarme estar escribiendo ruta por ruta y lo que hace es crear las siguientes rutas:
- GET: api/categories -> obtendrá toda la lista de categorías
- GET: api/categories/{category} -> obtendrá una categoría por su ID
- POST: api/categories -> creará una nueva categoría
- PUT: api/categories/{category} -> actualizará una categoría de acuerdo a su ID
- DELETE: api/categories/{category} -> eliminará una categoría de acuerdo a su ID */
/**
 * @param1 nombre que le asignaremos a nuestra ruta
 * @param2 Controlador encargado de manejar esa ruta
*/
Route::apiResource('categories', CategoryController::class);
