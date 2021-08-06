<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Reponse;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
        $question = Question::find(1);
        $reponses = $question->reponses;

        return view('test')->with(
            [
                'question' => $question->body,
                'reponses' => $reponses
            ]);
    }
}
