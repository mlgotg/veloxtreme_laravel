<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Validation\Rule;

class CheckoutController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function write(Request $request){
        $validation = $request->validate([
            'delivery_details_np' => Rule::requiredIf($request->input('delivery_type') == 'Нова пошта'),
            'delivery_details_c' => Rule::requiredIf($request->input('delivery_type') == 'Кур’єр'),
        ]);
        $user = new User();
        $user->name = $request->input('uname');
        $user->surname = $request->input('surname');
        $user->patronymic = $request->input('patronymic');
        $user->number = $request->input('number');
        $user->email = $request->input('email');
        $user->password = 111111;
        $user->patronymic = $request->input('patronymic');
        $user->save();
        $order = new Order();
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
        return view('submit');
    }

}
