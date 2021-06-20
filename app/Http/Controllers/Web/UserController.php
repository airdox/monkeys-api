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

        return redirect('/users/add');
    }

    public function list()
    {
        $user = new User();
        return view('users/list', ['users' => $user->all()]);
    }

    public function verifyEmailUnique()
    {
    }
}
