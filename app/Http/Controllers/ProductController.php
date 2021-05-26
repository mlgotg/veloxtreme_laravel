<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends BaseController
{
    public function getProducts(){
        return view('store', ['products' => Product::where('id', '>', 0)->paginate(12)->withPath('/store')]);
    }

    public function showProduct($id){
        return view('product', ['product' => DB::table('products')->find($id),
            'reviews' => DB::table('reviews')->where('product_id', intval($id))->get()]);
    }
}
