<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ReviewController extends Controller
{
    public function add(Request $request){
        DB::insert('insert into reviews (product_id, user_id, review) values (?, ?, ?)', [$request->input('id'), auth()->user()->id, $request->input('feedback')]);
        return redirect()->back();
    }
}
