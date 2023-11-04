<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
//        dd('$id'); //dd = dump and die (mostra o valor da variável e para a execução do código
        $question = Question::find($request->id);
        return view('answer.create')->with('question', $question);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $answer = new Answer();
        $answer->user_id = auth()->user()->id;
        $answer->question_id = $request->question_id;
        $answer->body = $request->body;
        $answer->save();
        return redirect()->route('question.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Answer $answer)
    {
        //
    }
}
