<?php

namespace App\Http\Controllers;

use App\Models\UserStat;
use Illuminate\Http\Request;

class UserStatsApiController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function upgradePower() {
        $userStat = UserStat::where('student_id', auth()->user()->id)->first();
        if ($userStat->evo > $userStat->power) {
            $userStat->update([
                'power' => $userStat->power + 1,
                'evo' => $userStat->evo - $userStat->power
            ]);
        }

        return response()->json($userStat);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function saveUserStat(Request $request) {
        $userStat = UserStat::where('student_id', auth()->user()->id)->first();
        $userStat->update([
            'power' => $request->power,
            'evo' => $request->evo,
            'dna' => $request->dna,
            'point' => $request->point
        ]);
    }

    /**
     * Display leader board order by point, evo and power desc
     * 
     * @return \Illuminate\Http\Response
     */
    public function leaderboard() {
        $leaderboard = UserStat::with('user')
            ->orderByDesc('evo')
            ->orderByDesc('point')
            ->orderByDesc('power')->get();

        return response()->json([
            'leaderboard' => $leaderboard
        ]);
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
