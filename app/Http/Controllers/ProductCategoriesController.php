<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreproductCategoriesRequest;
use App\Http\Requests\UpdateproductCategoriesRequest;
use App\Models\productCategories\productCategories;
use Illuminate\Http\Request;

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
        $newProductCategory = new productCategories();
        $newProductCategory->product_category_name = $request->product_category_name;
        $newProductCategory->save();


        return response()->json($this->index(),200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\productCategories\productCategories  $productCategories
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $product_id = $request->id;

        $product = productCategories::where('id','=',$product_id)->get();

        return response()->json($product, 200); 


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
    public function update(Request $request)
    {
        $product_id = $request->id;
        $product_category_name = $request->product_category_name;

        $productCategories = productCategories::where('id','=',$product_id)->get();

        foreach($productCategories as $productCategory){


            $productCategory->product_category_name = $product_category_name;

            $productCategory->save();
        }


        $id_details= new Request();
        $id_details['id'] = $product_id;

        return response()->json($this->show($id_details), 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\productCategories\productCategories  $productCategories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product_id = $request->id;
        
        $product = productCategories::where('id','=',$product_id)->get();

        foreach($product as $productCategory){



            $productCategory->delete();
        }

        return response()->json($this->index(), 200);

    }
}
