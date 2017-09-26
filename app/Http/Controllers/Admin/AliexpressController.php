<?php

namespace App\Http\Controllers\Admin;

use App\Aliexpress;
use App\Http\Requests\AliexpressRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductCategory;

class AliexpressController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Aliexpress $aliexpress
     * @return \Illuminate\Http\Response
     */
    public function index(Aliexpress $aliexpress)
    {
        $keywords = $aliexpress->all();

        return view('admin.aliexpress.all', compact('keywords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param ProductCategory $productCategory
     * @return \Illuminate\Http\Response
     */
    public function create(ProductCategory $productCategory)
    {
        $categories = $productCategory->all();

        return view('admin.aliexpress.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AliexpressRequest  $aliexpressRequest
     * @return \Illuminate\Http\Response
     */
    public function store(AliexpressRequest $aliexpressRequest, Aliexpress $aliexpress)
    {
       $aliexpress->addKeywords($aliexpressRequest);

        return $this->edit($aliexpress->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect(route('aliexpress.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Aliexpress $aliexpress)
    {
        return view('admin.aliexpress.edit', compact('aliexpress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
