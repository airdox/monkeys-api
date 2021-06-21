<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add(Request $request)
    {
        try {

            User::create([
                'email' => $request->email,
            ]);

            return response('ok', 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function list()
    {
        try {
            return response(User::all(), 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
