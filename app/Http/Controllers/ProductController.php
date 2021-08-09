<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = new Product;

        // Filtra productos de acuerdo al nombre del producto
        if (request()->has('name')) {
            $products = $products->where('name', 'LIKE', '%' . request('name') . '%');
        }

        // Ordena los productos en su campo 'name' de manera ya sea ascendente o descendente
        if (request()->has('sort')) {
            $products = $products->orderBy('name', request('sort'));
        }

        // Realiza el paginado
        $products = $products->paginate()->appends([
            'name' => request('name'),
            'sort' => request('sort')
        ]);

        return response($products);
    }

    public function category(Category $category) {
        $products = Product::where('category', $category->id)->get();
        return response($products);
        // return response($category->products()->get()); // Option 2
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $producto = Product::findOrFail($product->id);
        return response($producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        // $product = Product::findOrFail($product)->update($request->all());
        // return response($product);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // Product::destroy($product);
        // return response('Product has been deleted');
    }
}
