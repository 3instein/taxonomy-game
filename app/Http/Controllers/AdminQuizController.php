<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Quiz;
use Illuminate\Http\Request;

class AdminQuizController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.quiz.index', [
            'quizzes' => Quiz::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('admin.quiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validatedData = $request->validate([
            'question' => ['string', 'required'],
            'answer' => ['string', 'required'],
            'point' => ['integer', 'required']
        ]);

        $quiz = Quiz::create($validatedData);

        Log::create([
            'table' => app(Quiz::class)->getTable(),
            'student_id' => request()->user()->id,
            'description' => 'User id:' . request()->user()->id . ' created quiz id:' . $quiz->id,
            'ip' => request()->ip()
        ]);

        return redirect()->route('quiz.index')->with('success', 'Quiz berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz) {
        return view('admin.quiz.show', [
            'quiz' => $quiz
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz) {
        return view('admin.quiz.edit', [
            'quiz' => $quiz
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz) {
        $validatedData = $request->validate([
            'question' => ['string', 'required'],
            'answer' => ['string', 'required'],
            'point' => ['integer', 'required']
        ]);

        $quiz->update($validatedData);

        Log::create([
            'table' => app(Quiz::class)->getTable(),
            'student_id' => request()->user()->id,
            'description' => 'User id:' . request()->user()->id . ' updated quiz id:' . $quiz->id,
            'ip' => request()->ip()
        ]);

        return redirect()->route('quiz.index')->with('success', 'Quiz berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz) {
        $quiz->delete();

        Log::create([
            'table' => app(Quiz::class)->getTable(),
            'student_id' => request()->user()->id,
            'description' => 'User id:' . request()->user()->id . ' deleted quiz id:' . $quiz->id,
            'ip' => request()->ip()
        ]);

        return redirect()->route('quiz.index')->with('success', 'Quiz berhasil dihapus!');
    }
}
