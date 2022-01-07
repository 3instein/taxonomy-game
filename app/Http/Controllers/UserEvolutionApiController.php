<?php

namespace App\Http\Controllers;

use App\Models\UserEvolution;
use Illuminate\Http\Request;

class UserEvolutionApiController extends Controller
{
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        UserEvolution::create([
            'student_id' => $request->user()->id,
            'evolution_id' => $request->input('evolution_id')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserEvolution  $userEvolution
     * @return \Illuminate\Http\Response
     */
    public function show(UserEvolution $userEvolution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserEvolution  $userEvolution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserEvolution $userEvolution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserEvolution  $userEvolution
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserEvolution $userEvolution)
    {
        //
    }
}
