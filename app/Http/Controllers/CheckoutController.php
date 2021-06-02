<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use function PHPUnit\Framework\isNull;

class CheckoutController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function view(){
        $products= auth()->user() ->products;
        if(!isset($products[0])){
            return view('main');
        }
        $counts = [];
        for ($i = 0; $i < sizeof($products); $i++){
            $counts[$i] = preg_replace( '/[^0-9]/', '', DB::table('product_user')
                -> where('product_id', $products[$i]->id)
                -> where('user_id', auth()->user()->id)
                ->get('count'));
        }
        return view('checkout', ['products' => $products, 'counts' => $counts]);
    }
    public function write(Request $request){
        $validation = $request->validate([
            'delivery_details_np' => Rule::requiredIf($request->input('delivery_type') == 'Нова пошта'),
            'delivery_details_c' => Rule::requiredIf($request->input('delivery_type') == 'Кур’єр'),
        ]);
//        $user = new User();
//        $user->name = $request->input('uname');
//        $user->surname = $request->input('surname');
//        $user->patronymic = $request->input('patronymic');
//        $user->number = $request->input('number');
//        $user->email = $request->input('email');
//        $user->password = 111111;
//        $user->patronymic = $request->input('patronymic');
//        $user->save();
        $order = new Order();
        $user = auth()->user();
        $order->user_id = $user->id;
        $order->delivery_type = $request->input('delivery_type');
        if($request->input('delivery_type') == 'Нова пошта'){
            $order->delivery_details = $request->input('delivery_details_np');
        }
        else if($request->input('delivery_type') == 'Кур’єр'){
            $order->delivery_details = $request->input('delivery_details_c');
        }
        else{
            $order->delivery_details = null;
        }
        $order->pay_type = $request->input('pay_type');
        $order->comment = $request->input('comment');
        $order -> save();
        foreach (auth()->user()->products as $p){
            DB::insert( 'insert into product_order (product_id, order_id, count) values (?, ?, ?)',
                [$p->id, $order->id, preg_replace( '/[^0-9]/', '', DB::table('product_user')
                    -> where('product_id', $p->id)
                    -> where('user_id', auth()->user()->id)
                    ->get('count'))
            ]);
        }
        $counts = [];
        $products= auth()->user() ->products;
        for ($i = 0; $i < sizeof($products); $i++){
            $counts[$i] = preg_replace( '/[^0-9]/', '', DB::table('product_user') -> where('product_id', $products[$i]->id) -> where('user_id', auth()->user()->id)->get('count'));
        }
        //$order->products = auth()->user()->products;
        DB::delete('delete from product_user where user_id = :user_id', ['user_id' => auth()->user()->id]);

        return view('submitorder', ['order' => $order, 'counts' => $counts, 'products' => $products]);
    }

}
