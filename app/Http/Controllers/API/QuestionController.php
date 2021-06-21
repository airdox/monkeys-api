<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function add(Request $request)
    {
        try {

            Question::create([
                'email' => $request->email,
            ]);

            return response('ok', 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
