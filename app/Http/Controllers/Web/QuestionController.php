<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\API\QuestionController as APIQuestionController;
use App\Http\Controllers\Controller;
use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function add(Request $request)
    {
        $question = new APIQuestionController;
        $question->add($request);

        return redirect('/question/add');
    }

    public function edit()
    {
    }

    public function list()
    {
        return view('question/list', ['questions' => Question::with('responses')->get()]);
    }

    public function delete()
    {
    }

    public function listResponses()
    {
    }
}
