<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Reponse;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(Request $request){
        if (!$request->session()->exists('questions')) {
            $questions = Question::all();
            session(['questions' => $questions,
                'qNumber' => 0]);
        }
            return view('test');
    }

    public function nextQuestion(Request $request) {

        $questions = $request->session()->get('questions');
        $qn = $request->session()->get('qNumber');

        if($qn < $questions->count()) {
            $qn++ ;
            $request->session()->put('qNumber', $qn);
            $answers = $questions[$qn - 1]->reponses;

            return [$questions[$qn - 1], $qn, $answers];
        }
        else {
            $request->session()->forget(['questions', 'qNumber']);
            return redirect('home');
        }
    }
}
