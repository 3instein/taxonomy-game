<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\UserStat;
use Illuminate\Http\Request;

class QuizApiController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $userStat = UserStat::where('student_id', auth()->user()->id)->first();
        if ($userStat->point < 100) {
            $quiz = Quiz::take(10)->get();
        } else if ($userStat->point >= 100) {
            $quiz = Quiz::skip(10)->take(10)->get();
        } else if ($userStat->point >= 200) {
            $quiz = Quiz::skip(20)->take(10)->get();
        }

        return response()->json([
            'quizzes' => $quiz
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
