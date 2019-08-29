<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{

    public function index() {

        $questions = Question::orderBy('created_at')->get();

        return view('pages.home', ["questions" => $questions]);

    }
    public function show($id) {

        $question = Question::where('id', $id)->first();

        return view('pages.question', ["question" => $question]);
    }

    public function store(Request $request)
    {

        $validateData = $request->validate([
            'question' => 'required|min:5|ends_with:?',
        ]);

        if (!$validateData) {
            return redirect()->back()->withErrors($validateData->errors());
        }

        $question = new Question();
        $question->question = request('question');
        $question->save();

        return redirect()->route('question.show', ['id' => $question->id]);
    }

}
