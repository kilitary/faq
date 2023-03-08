<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    
    public function form(Request $request)
    {
        return view('faq.form');
    }
    
    public function index(Request $request)
    {
        $qas = Question::where('show', 'on')
            ->with('answer')
            ->get();
        
        return view('faq.list', compact('qas'));
    }
    
    public function create(Request $request)
    {
        $question = Question::create([
            'text' => $request->post('question'),
            'show' => $request->post('show')
        ]);
        
        Answer::create([
            'text' => $request->post('answer'),
            'question_id' => $question->id
        ]);
        
        return response()->redirectTo('/faq');
    }
}
