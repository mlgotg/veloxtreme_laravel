<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class SignController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function create(Request $request){

        $user = new User();
        $user->name = $request->input('uname');
        $user->surname = $request->input('surname');
        $user->patronymic = $request->input('patronymic');
        $user->number = $request->input('number');
        $user->email = $request->input('email');
        if($request->input('psw1') !== $request->input('psw1'))
            return view('main');
        $user->password = $request->input('psw1');
        $user->save();
        auth()->login($user);
        //dd($user);
        return view('main');

    }

}
