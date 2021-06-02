<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class SessionsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }

}
