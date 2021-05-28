<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use \App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class BasketController extends Controller
{
    public function add(Request $request){
        if(auth()->check()){
            DB::insert( 'insert into product_user (product_id, user_id) values (?, ?)', [$request->input('id'), auth()->user()->id]);
            return redirect('/store');
        }
    }
    public function remove(Request $request){
        DB::delete('delete from product_user where user_id = :user_id and product_id = :product_id', ['user_id' => auth()->user()->id, 'product_id' => $request->input('id')]);
        return redirect('/basket');
    }
    public function view(){
        if(auth()->check()){
            $user = auth()->user();
            $products = $user -> products;
            return view('basket', ['products' => $products]);
        }
    }
}
