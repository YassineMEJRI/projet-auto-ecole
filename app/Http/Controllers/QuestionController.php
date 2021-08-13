<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Reponse;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function create(){
        return view('Quiz.create_question');
    }

    public function store(Request $request){
        $this->validate($request, [
            'enonce' => 'required',
            'rep1' => 'required',
            'correcte' => 'required'
        ]);

        $question = new Question();
        $question->body = $request->enonce;
        if($request->hasFile('image')){
            $request->validate([
                'image' =>'mimes:jpeg,jpg,png,bmp'
            ]);
            $path = $request->image->store('public/images');
            $question->image = basename($path);
        }
        $question->save();

        $reponse1 = new Reponse();
        $reponse1->body = $request->rep1;
        $reponse1->question_id = $question->id;
        if($request->correcte == '1')
            $reponse1->correct = 1;
        $reponse1->save();

        if(isset($request->rep2)){
            $reponse2 = new Reponse();
            $reponse2->body = $request->rep2;
            $reponse2->question_id = $question->id;
            if($request->correcte == '2')
                $reponse2->correct = 1;
            $reponse2->save();
        }
        if(isset($request->rep3)){
            $reponse3 = new Reponse();
            $reponse3->body = $request->rep3;
            $reponse3->question_id = $question->id;
            if($request->correcte == '3')
                $reponse3->correct = 1;
            $reponse3->save();
        }
        if(isset($request->rep4)){
            $reponse4 = new Reponse();
            $reponse4->body = $request->rep4;
            $reponse4->question_id = $question->id;
            if($request->correcte == '4')
                $reponse4->correct = 1;
            $reponse4->save();
        }
        return redirect('/')->with('success','Question ajoutée avec succées');
    }

}
