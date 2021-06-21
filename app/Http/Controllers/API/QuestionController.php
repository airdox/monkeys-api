<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function list()
    {
        try {

            $questions = Question::with('responses')->get();
            // $questions = $questions->users();


            return response($questions, 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
