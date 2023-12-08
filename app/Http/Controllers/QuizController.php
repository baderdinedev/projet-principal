<?php

namespace App\Http\Controllers;

use App\Models\QuizQuestion;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function quiz1($question_id = null)
    {
        $question = $question_id
            ? QuizQuestion::find($question_id)
            : QuizQuestion::where('difficulty_level', 'beginner')->orderBy('id')->first();

        // Pass the quiz question to the view
        return view('quiz.quiz1', [
            'question' => $question,
        ]);
    }



    public function result(Request $request, $question_id = null)
    {
        // Validate the submitted answer
        $request->validate([
            'answer' => 'required|in:true,false',
        ]);

        // Retrieve the selected answer from the request
        $selectedAnswer = $request->input('answer');

        // Retrieve the correct answer and explanation from the database
        $question = QuizQuestion::where('answer_boolean', true)->first();

        // Check if the selected answer is correct
        $isCorrect = strtolower($selectedAnswer) === strtolower($question->answer_boolean ? 'true' : 'false');

        // Pass data to the result view
        return view('quiz.result', [
            'selectedAnswer' => $selectedAnswer,
            'isCorrect' => $isCorrect,
            'explanation' => $isCorrect ? null : $question->explanation_text,
        ]);
    }



    public function quiz2()
    {
        return view('quiz.quiz2');
    }

    public function quiz3()
    {
        return view('quiz.quiz3');
    }
}
