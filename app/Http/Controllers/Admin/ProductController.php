<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use App\Product;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $products = $product->all();

        return view('admin.product.all', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductRequest  $request
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request, Product $product)
    {
        $product->add($request);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return $this->edit($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductRequest  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product->add($request, $product->id);

        return redirect(route('product.edit', $product));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);

        return $this->index($product);
    }
}
