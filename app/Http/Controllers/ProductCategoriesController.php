<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductCategoriesRequest;
use App\Http\Requests\UpdateproductCategoriesRequest;
use App\Models\productCategories\productCategories;

class ProductCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(productCategories::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreproductCategoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productCategories\productCategories  $productCategories
     * @return \Illuminate\Http\Response
     */
    public function show(productCategories $productCategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\productCategories\productCategories  $productCategories
     * @return \Illuminate\Http\Response
     */
    public function edit(productCategories $productCategories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateproductCategoriesRequest  $request
     * @param  \App\Models\productCategories\productCategories  $productCategories
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateproductCategoriesRequest $request, productCategories $productCategories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productCategories\productCategories  $productCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(productCategories $productCategories)
    {
        //
    }
}
