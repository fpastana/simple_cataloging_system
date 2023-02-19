<?php

namespace App\Http\Controllers;

use App\Catalog;
use Illuminate\Http\Request;

use App\Product;
use App\Category;

class CatalogController extends Controller
{
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

    public function destroy(Request $request)
    {
        if(isset($request->sku)){
            $delete_product = Product::where('sku', $request->sku)
            ->delete();
            if($delete_product === true){
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
