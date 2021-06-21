<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Question;
use App\Response;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function list()
    {
        try {

            $questions = Question::with('responses')->get();

            return response($questions, 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function add(Request $request)
    {
        try {

            Question::create([
                'question' => $request->question,
            ]);

            $question_id = Question::select('id')
                ->orderBy('id', 'DESC')
                ->first();

            Response::create([
                'question_id' => $question_id->id,
                'response' => $request->response1
            ]);
            Response::create([
                'question_id' => $question_id->id,
                'response' => $request->response2
            ]);
            Response::create([
                'question_id' => $question_id->id,
                'response' => $request->response3
            ]);
            Response::create([
                'question_id' => $question_id->id,
                'response' => $request->response4
            ]);

            return response('ok', 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
