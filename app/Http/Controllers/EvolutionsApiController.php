<?php

namespace App\Http\Controllers;

use App\Models\Evolution;
use App\Models\UserCreature;
use App\Models\UserEvolution;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class EvolutionsApiController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $evolutions = Evolution::whereDoesntHave('user', function (Builder $query) {
            $query->where('student_id', auth()->user()->id);
        })->where(function ($query) {
            $user = UserEvolution::where('student_id', auth()->user()->id)->get();
            $query->whereNull('prerequisite_id');
            $query->orWhereIn('prerequisite_id', $user->pluck('evolution_id'));
        })->where(function ($query) {
            $userCreatures = UserCreature::where('student_id', auth()->user()->id)->get();
            $query->whereNull('species_id');
            $query->orWhereIn('species_id', $userCreatures->pluck('species_id'));
        })->get();;

        return response()->json([
            'evolutions' => $evolutions
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
        $evolution = Evolution::whereId($id)->first();
        return response()->json($evolution);
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
