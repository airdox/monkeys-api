<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add(Request $request)
    {

        User::create([
            'email' => $request->email,
        ]);

        return redirect('/user/add');
    }

    public function list()
    {
        return view('user/list', ['users' => User::all()]);
    }

    public function verifyEmailUnique()
    {
    }
}
