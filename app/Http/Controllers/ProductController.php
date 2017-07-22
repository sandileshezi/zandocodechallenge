<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function getProducts(Request $request)
    {
        $products = Product::where('status', '=', 'active');
        $products = $products->where('quality_approved', '=', true);
        $products = $products->where('price', '!=', null);
        $products = $products->where('image_url', '!=', null);
        $products = $products->where('name', '!=', null);
        $products = $products->where('brand', '!=', null);
        $products = $products->where('sku', '!=', null)->get();

        return view("products.products",[
            "products"=>$products
        ]);
    }
}