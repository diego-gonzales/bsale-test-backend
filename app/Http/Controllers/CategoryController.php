<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // FUNCION QUE ME DEVOLVERÁ LA LISTA DE CATEGORÍAS
    // se corresponde con la ruta: GET api/categories
    public function index()
    {
        $categories = Category::all();
        return response($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // FUNCION QUE ME ALMACENARÁ UNA NUEVA CATEGORÍA EN LA DB, en este caso no la usamos porque la prueba no lo necesita
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    // FUNCION QUE ME DEVOLVERÁ UNA CATEGORÍA DE ACUERDO A SU ID, en este caso no la usamos porque la prueba no lo necesita
    public function show(Category $category)
    {
        $category = Category::findOrFail($category->id);
        return response($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    // FUNCION QUE ME ACTUALIZARÁ UNA CATEGORÍA DE LA DB, en este caso no la usamos porque la prueba no lo necesita
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    // FUNCION QUE ME ELIMINARÁ UNA CATEGORÍA DE LA DB, en este caso no la usamos porque la prueba no lo necesita
    public function destroy(Category $category)
    {
        //
    }
}
