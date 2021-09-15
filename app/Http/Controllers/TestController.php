<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Reponse;
use App\Models\UserQuizSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index(Request $request){
        //if (!$request->session()->exists('questions')) {
            DB::table('user_quiz_sessions')
                ->where('user_id', '=', Auth::user()->id)
                ->delete();
            $questions = Question::all()->random(30)->shuffle();
            session([
                'questions' => $questions,
                'qNumber' => 0
            ]);


        //}
            return view('Quiz.test');
    }

    public function nextQuestion(Request $request) {
        $questions = $request->session()->get('questions');
        $qn = $request->session()->get('qNumber');

        $submitted_answer = $request->input('answer');

        if($submitted_answer != NULL){
            $useranswer = new UserQuizSession();
            $useranswer->user_id = Auth::user()->id;
            $useranswer->reponse_id = $submitted_answer;
            $useranswer->question_id = $request->input('questionId');
            $useranswer->save();
        }

        if($qn < 30/*$questions->count()*/) {
            $qn++ ;
            $request->session()->put('qNumber', $qn);
            $answers = $questions[$qn - 1]->reponses;

            return [$questions[$qn - 1], $qn, $answers];
        }
//        else {
//            $request->session()->forget(['questions', 'qNumber']);
//            return 'test';
//        }
    }

    public function results(Request $request){
        $submitted_answers = DB::table('user_quiz_sessions')
                                    ->where('user_id', '=', Auth::user()->id)
                                    ->get();

        $correction = $request->session()->get('questions');
        foreach ($correction as $co){
            $co->answers = DB::table('reponses')
                ->where('question_id', '=', $co->id)
                ->get();
            $co->chosen = DB::table('user_quiz_sessions')
                ->where('user_id', '=', Auth::user()->id)
                ->where('question_id', '=', $co->id)
                ->select('reponse_id')
                ->first();
        }
        //ddd($correction);
        $score = 0;
        foreach ($submitted_answers as $submitted_answer){
            $rep = Reponse::find($submitted_answer->reponse_id);
            if($rep->correct)
                $score++;
        }
//todo uncomment
//        DB::table('user_quiz_sessions')
//                ->where('user_id', '=', Auth::user()->id)
//                ->delete();
        return view('Quiz.results')->with('score', $score)
            ->with('correction', $correction);
    }
}
