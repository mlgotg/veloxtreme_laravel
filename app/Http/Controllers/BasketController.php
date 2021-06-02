<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use \App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use function PHPUnit\Framework\isNull;

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
            return redirect(url()->previous());
        }
    }
    public function remove(Request $request){
        DB::delete('delete from product_user where user_id = :user_id and product_id = :product_id', ['user_id' => auth()->user()->id, 'product_id' => $request->input('id')]);
        return redirect('/basket');
    }
    public function update(Request $request){
        if ($request->input('count')!==null){
            DB::table('product_user')
                ->where('product_id', $request->input('id'))
                ->where('user_id', auth()->user()->id)
                ->update(['count' => $request->input('count')]);
        }
        return redirect('/basket');
    }
    public function view(){
        if(auth()->check()){
            $user = auth()->user();
            $products = $user -> products;
            if(!isset($products[0])){
                return view('submit', ['message' => "Ваша корзина пуста"]);
            }


            $counts = [];
            for ($i = 0; $i < sizeof($products); $i++){
                $counts[$i] = preg_replace( '/[^0-9]/', '', DB::table('product_user') -> where('product_id', $products[$i]->id) -> where('user_id', auth()->user()->id)->get('count'));
            }
            return view('basket', ['products' => $products, 'counts' => $counts]);
        }
    }
}
