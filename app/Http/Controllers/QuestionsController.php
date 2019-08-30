<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class QuestionsController extends Controller
{

    public function index() {

        $placeholders = ['Why do I love chickpeas so much?', 'Are vegans crazy?', 'But... where do I get the protein from?', 'Do plants feel pain?', 'Do vegans eat fish?'];
        $rndplaceholder = Arr::random($placeholders);

        $questions = Question::orderBy('created_at', 'DESC')->get();


        return view('pages.home', ["questions" => $questions, "placeholder" => $rndplaceholder]);

    }
    public function show($id) {

        $question = Question::where('id', $id)->first();

        if($question == null) return abort(404);

        return view('pages.question', ["question" => $question, "answers" => $question->answers]);
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
