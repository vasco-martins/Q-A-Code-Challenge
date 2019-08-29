<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;

class AnswersController extends Controller
{

    public function store(Request $request, $id)
    {

        $validateData = $request->validate([
            'answer' => 'required|min:5',
        ]);

        if (!$validateData) {
            return redirect()->back()->withErrors($validateData->errors());
        }

        $answer = new Answer();
        $answer->question_id = $id;
        $answer->answer = request('answer');
        $answer->save();

        return redirect()->back();
    }

}
