<?php

namespace App\Http\Controllers;

use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MyController extends Controller
{
    public function show_tests()
    {
        $tests = DB::table('tests')
                    ->select('id','name_test')
                    ->get();
        return view('test', ['tests'=>$tests]);
    }
    public function show_question($id){

        $questions_head = DB::table('questions')
                        ->where('test_id', '=', "$id")
                        ->get();
        $questions_answers = DB::table('questions')
            ->where('test_id', '=', "$id")
            ->join('answers', 'questions.id', '=','answers.question_id')
            ->get();

        return view('question', ['questions_head' => $questions_head , 'questions_answers'=>$questions_answers]);
    }
}
