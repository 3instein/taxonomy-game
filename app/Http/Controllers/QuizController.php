<?php

namespace App\Http\Controllers;

use App\Models\Log;
use App\Models\Quiz;
use App\Models\UserStat;
use Illuminate\Http\Request;

class QuizController extends Controller
{

    /**
     * Update user point
     * @param Illuminate\Http\Request
     */

    public function updatePoint(Request $request)
    {
        $userStat = UserStat::where('student_id', auth()->user()->id)->first();
        $gainedPoint = $request->input('user-point');
        if ($userStat->point < $gainedPoint) {
            $userStat->update([
                'point' => $gainedPoint
            ]);
        }

        if ($gainedPoint != 0) {
            Log::create([
                'table' => app(UserStat::class)->getTable(),
                'student_id' => $request->user()->id,
                'description' => 'User id:' . $request->user()->id . ' UserStat.point added by ' . $gainedPoint,
                'ip' => request()->ip()
            ]);
        }

        return redirect('/')->with('success', $request->input('wrong-answer'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
