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

class SignController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function write(Request $request){
        $user = new User();
        $user->name = $request->input('uname');
        $user->surname = $request->input('surname');
        $user->patronymic = $request->input('patronymic');
        $user->number = $request->input('number');
        $user->email = $request->input('email');
        if('psw1' != 'psw2')
            return view('main');
        $user->email = $request->input('psw1');
        $user->save();
        return view('main');
    }

}
