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
        $res = Product::where('product_type', 'Велосипеди');
        if(isset($_GET['price'])) {
            $prices = explode(' ', $_GET['price']);
            $res = $res->whereBetween('price', $prices);
        }
        if(isset($_GET['type'])) {
            $types = explode(' ', $_GET['type']);
            $res = $res->whereIn('type', $types);
        }
        if(isset($_GET['color'])) {
            $colors = explode(' ', $_GET['color']);
            $res = $res->whereIn('color', $colors);
        }
        if(isset($_GET['diameter'])) {
            $diameters = explode(' ', $_GET['diameter']);
            $res = $res->whereIn('diameter', $diameters);
        }
        if(isset($_GET['manufacturer'])) {
            $manufacturers = explode(' ', $_GET['manufacturer']);
            $res = $res->whereIn('manufacturer', $manufacturers);
        }
        if(isset($_GET['frame'])) {
            $frames = explode(' ', $_GET['frame']);
            $res = $res->whereIn('frame', $frames);
        }
        if(isset($_GET['brakes'])) {
            $brakes = explode(' ', $_GET['brakes']);
            $res = $res->whereIn('brakes', $brakes);
        }
        if(isset($_GET['sort'])) {
            $sort = $_GET['sort'];
            if($sort == 'price_asc') $res = $res->orderBy('price', 'asc');
            else if($sort == 'price_desc') $res = $res->orderByDesc('price');
            else if($sort == 'alpha_asc') $res = $res->orderBy('manufacturer')->orderBy('model');
            else if($sort == 'alpha_desc') $res = $res->orderByDesc('manufacturer')->orderByDesc('model');
        }
        return view('store', ['products' => $res->paginate(12)->withPath('/store'),
            'products_types' => Product::where('product_type', 'Велосипеди')->select('type')->distinct()->orderBy('type')->get()->map->only('type'),
            'colors' => Product::where('product_type', 'Велосипеди')->select('color')->distinct()->orderBy('color')->get()->map->only('color'),
            'diameters' => Product::where('product_type', 'Велосипеди')->select('diameter')->distinct()->orderBy('diameter')->get()->map->only('diameter'),
            'manufacturers' => Product::where('product_type', 'Велосипеди')->select('manufacturer')->distinct()->orderBy('manufacturer')->get()->map->only('manufacturer'),
            'frames' => Product::where('product_type', 'Велосипеди')->select('frame')->distinct()->orderBy('frame')->get()->map->only('frame'),
            'brakes_types' => Product::where('product_type', 'Велосипеди')->select('brakes')->distinct()->orderBy('brakes')->get()->map->only('brakes')
        ]);
    }

    public function getAccessoriesTypes() {
        return view('accessories', ['name' => 'Аксесуари', 'lnk'=>'accessories','accessories_types' => Product::where('product_type', 'Аксесуари')->whereIn('id', function($query) {$query->selectRaw('min(id)')->from('products')->where('product_type', 'Аксесуари')->groupBy('type');})->orderBy('product_type')->get()]);
    }

    public function getAccessories(){
        $res = Product::where('product_type', 'Аксесуари')->where('type', $_GET['type']);
        if(isset($_GET['price'])) {
            $prices = explode(' ', $_GET['price']);
            $res = $res->whereBetween('price', $prices);
        }
        if(isset($_GET['color'])) {
            $colors = explode(' ', $_GET['color']);
            $res = $res->whereIn('color', $colors);
        }
        if(isset($_GET['manufacturer'])) {
            $manufacturers = explode(' ', $_GET['manufacturer']);
            $res = $res->whereIn('manufacturer', $manufacturers);
        }
        if(isset($_GET['sort'])) {
            $sort = $_GET['sort'];
            if($sort == 'price_asc') $res = $res->orderBy('price', 'asc');
            else if($sort == 'price_desc') $res = $res->orderByDesc('price');
            else if($sort == 'alpha_asc') $res = $res->orderBy('manufacturer')->orderBy('model');
            else if($sort == 'alpha_desc') $res = $res->orderByDesc('manufacturer')->orderByDesc('model');
        }
        return view('accessories_selected', ['name' => 'Аксесуари','lnk'=>'accessories','accessories' => $res->paginate(12)->withPath('/store/accessories/selected'),
            'colors' => Product::where('product_type', 'Аксесуари')->where('type', $_GET['type'])->select('color')->distinct()->orderBy('color')->get()->map->only('color'),
            'manufacturers' => Product::where('product_type', 'Аксесуари')->where('type', $_GET['type'])->select('manufacturer')->distinct()->orderBy('manufacturer')->get()->map->only('manufacturer')
        ]);
    }

    public function getPartsTypes() {
        return view('accessories', ['name' => 'Запчастини','lnk'=>'parts', 'accessories_types' => Product::where('product_type', 'Запчастини')->whereIn('id', function($query) {$query->selectRaw('min(id)')->from('products')->where('product_type', 'Запчастини')->groupBy('type');})->orderBy('product_type')->get()]);
    }

    public function getParts(){
        $res = Product::where('product_type', 'Запчастини')->where('type', $_GET['type']);
        if(isset($_GET['price'])) {
            $prices = explode(' ', $_GET['price']);
            $res = $res->whereBetween('price', $prices);
        }
        if(isset($_GET['color'])) {
            $colors = explode(' ', $_GET['color']);
            $res = $res->whereIn('color', $colors);
        }
        if(isset($_GET['manufacturer'])) {
            $manufacturers = explode(' ', $_GET['manufacturer']);
            $res = $res->whereIn('manufacturer', $manufacturers);
        }
        if(isset($_GET['sort'])) {
            $sort = $_GET['sort'];
            if($sort == 'price_asc') $res = $res->orderBy('price', 'asc');
            else if($sort == 'price_desc') $res = $res->orderByDesc('price');
            else if($sort == 'alpha_asc') $res = $res->orderBy('manufacturer')->orderBy('model');
            else if($sort == 'alpha_desc') $res = $res->orderByDesc('manufacturer')->orderByDesc('model');
        }
        return view('accessories_selected', ['name' => 'Запчастини','lnk'=>'parts','accessories' => $res->paginate(12)->withPath('/store/parts/selected'),
            'colors' => Product::where('product_type', 'Запчастини')->where('type', $_GET['type'])->select('color')->distinct()->orderBy('color')->get()->map->only('color'),
            'manufacturers' => Product::where('product_type', 'Запчастини')->where('type', $_GET['type'])->select('manufacturer')->distinct()->orderBy('manufacturer')->get()->map->only('manufacturer')
        ]);
    }

    public function showProduct($id){
        return view('product', ['product' => DB::table('products')->find($id),
            'reviews' => Review::where('product_id', intval($id))->get()]);
    }
}
