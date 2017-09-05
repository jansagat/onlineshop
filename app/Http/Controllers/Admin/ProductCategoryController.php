<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductCategoryRequest;
use App\ProductCategory;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{

    /**
     * Create a new ProductCategoryController instance.
     *
     * @param ProductCategory $productCategory
     */
    public function __construct(ProductCategory $productCategory)
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @param ProductCategory $productCategory
     * @return \Illuminate\Http\Response
     */
    public function index(ProductCategory $productCategory)
    {
        $categories = $productCategory->all();

        return view('admin.product-category.all', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param ProductCategory $productCategory
     * @return \Illuminate\Http\Response
     */
    public function create(ProductCategory $productCategory)
    {
        return view('admin.product-category.create', compact('productCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  ProductCategoryRequest  $request
     * @param  ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function store(ProductCategoryRequest $request, ProductCategory $productCategory)
    {
        $productCategory->add($request);

        return $this->index($productCategory);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productCategory)
    {
        return $this->edit($productCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productCategory)
    {
        return view('admin.product-category.edit', compact('productCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  ProductCategoryRequest  $request
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function update(ProductCategoryRequest $request, ProductCategory $productCategory)
    {
        $productCategory->add($request, $productCategory->id);

        return redirect(route('product-category.edit', $productCategory));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductCategory  $productCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productCategory)
    {
        ProductCategory::destroy($productCategory->id);

        return $this->index($productCategory);
    }
}
