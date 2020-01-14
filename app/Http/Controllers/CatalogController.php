<?php

namespace App\Http\Controllers;

use App\Catalog;
use Illuminate\Http\Request;

use App\Product;
use App\Category;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('catalog.index');
    }

    public function listAllProducts()
    {
        $products = Product::select()
        ->get()
        ->toJson();

        return $products;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $new_category = new Category();
        $new_category->name = $request->category;
        $new_category->save();

        $new_product = new Product();
        $new_product->name = $request->name;
        $new_product->category_id = $new_category->id;
        $new_product->sku = $request->sku;
        $new_product->price = $request->price;
        $new_product->save();

        return 'Product inserted into database';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        if(isset($request->sku)){
            $products = Product::select()
            ->get()
            ->where('sku', $request->sku)
            ->toJson();
            return $products;
        } else {
            return 'Please, put sku information to get this item';
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalog $catalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalog $catalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if(isset($request->sku)){
            $delete_product = Product::where('sku', $request->sku)
            ->delete();
            if($delete_product == true){
                return 'Item deleted from database';
            } else {
                return 'Item was not found in the database';
            }
        } else {
            return 'Please, put sku information to delete this item';
        }
    }

    public function listAllProductCategories()
    {
        $categories = Category::select()
        ->get()
        ->toJson();

        return $categories;
    }
}
