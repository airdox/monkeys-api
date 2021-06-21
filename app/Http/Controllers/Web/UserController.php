<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\API\UserController as APIUserController;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function add(Request $request)
    {
        $user = new APIUserController;
        $user->add($request);

        return redirect('/user/add');
    }

    public function list()
    {
        return view('user/list', ['users' => User::all()]);
    }
}
