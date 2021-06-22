<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\ResponseUser;
use App\User;
use Illuminate\Http\Request;

class ResponseUserController extends Controller
{

    public function add(Request $request)
    {
        try {

            User::create([
                'email' => $request->email,
            ]);

            $user = User::select('id')
                ->orderBy('id', 'DESC')
                ->first();

            foreach ($request->responses as $response) {
                ResponseUser::create([
                    'response_id' => $response,
                    'user_id' => $user->id
                ]);
            }

            return response('ok', 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
