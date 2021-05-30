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
            $c = preg_replace( '/[^0-9]/', '', DB::table('product_user')
                -> where('product_id', $request->input('id'))
                -> where('user_id', auth()->user()->id)
                ->get('count'));
            if($c >= 1) {
                DB::table('product_user')
                    ->where('product_id', $request->input('id'))
                    ->where('user_id', auth()->user()->id)
                    ->update(['count' => $c+1]);
            }
            else {
                DB::insert('insert into product_user (product_id, user_id) values (?, ?)', [$request->input('id'), auth()->user()->id]);
            }
            return redirect('/store');
        }
    }
    public function remove(Request $request){
        DB::delete('delete from product_user where user_id = :user_id and product_id = :product_id', ['user_id' => auth()->user()->id, 'product_id' => $request->input('id')]);
        return redirect('/basket');
    }
    public function update(Request $request){
        DB::table('product_user')
            ->where('product_id', $request->input('id'))
            ->where('user_id', auth()->user()->id)
            ->update(['count' => $request->input('count')]);
        return redirect('/basket');
    }
    public function view(){
        //DB::table('product_user') -> where('product_id', $product->id)->get('count');
        if(auth()->check()){
            $user = auth()->user();
            $products = $user -> products;
            $counts = [];
            for ($i = 0; $i < sizeof($products); $i++){
                $counts[$i] = preg_replace( '/[^0-9]/', '', DB::table('product_user') -> where('product_id', $products[$i]->id) -> where('user_id', auth()->user()->id)->get('count'));
            }
            return view('basket', ['products' => $products, 'counts' => $counts]);
        }
    }
}
