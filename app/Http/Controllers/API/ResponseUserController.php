<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\ResponseUser;
use Illuminate\Http\Request;

class ResponseUserController extends Controller
{

    public function add(Request $request)
    {
        try {

            foreach ($request->responses as $response) {
                ResponseUser::create([
                    'response_id' => $response,
                    'user_id' => $request->user_id
                ]);
            }

            return response('ok', 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
