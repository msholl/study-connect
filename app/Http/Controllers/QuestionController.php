<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('question.index', [
            'questions' => \DB::table('questions')
                ->orderBy('votes_count', 'desc')
                ->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd(auth()->user()->id);
        $question = \App\Models\Question::create([
            'user_id' => auth()->user()->id,
            'title' => $request->title,
            'body' => $request->body,
            'category' => $request->category,
            'votes_count' => 0
        ]);

        return redirect()->route('question.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $answers = \App\Models\Answer::where('question_id', $id)->get();
        foreach ($answers as $answer) {
            $answer->user = \App\Models\User::find($answer->user_id);
        }
        return view('question.show', [
            'question' => \App\Models\Question::find($id),
            'answers' => $answers,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function vote()
    {
        $question = \App\Models\Question::find(request('question_id'));
        $question->votes_count++;
        $question->save();
//        redirect()->route('question.index');
        return redirect()->back();
    }
}
