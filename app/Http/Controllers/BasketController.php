<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BasketController extends Controller
{
    public function add(){
        if(auth()->check()){

        }
    }
    public function view()
    {
        if(auth()->check()){
            $user = auth()->user();
            $products = $user -> products;
            return view('basket', ['products' => $products]);
        }
        //return view('basket');
    }
}
