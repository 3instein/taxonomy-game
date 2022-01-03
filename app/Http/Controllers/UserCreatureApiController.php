<?php

namespace App\Http\Controllers;

use App\Models\Species;
use App\Models\User;
use App\Models\UserCreature;
use Illuminate\Http\Request;

class UserCreatureApiController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $userCreatures = UserCreature::with('species')
            ->where('student_id', auth()->user()->id)
            ->get()
            ->pluck('species');

        // $userCreatures = User::with('userCreatures.species')
        //     ->where('id', auth()->user()->id)
        //     ->get();

        return response()->json([
            'species' => $userCreatures
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
