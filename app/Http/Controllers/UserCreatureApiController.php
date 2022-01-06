<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Species;
use App\Models\Evolution;
use App\Models\UserCreature;
use Illuminate\Http\Request;
use App\Models\UserEvolution;
use Illuminate\Database\Eloquent\Builder;

class UserCreatureApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userCreatures = Species::query()
            ->with(['evolutions' => function ($query) {
                $query->has('user');
            }])
            ->whereHas('userCreatures', function ($query) {
                $query->where('student_id', auth()->user()->id);
            })
            ->get();


        // $userCreatures = Evolution::
        // whereHas('userEvolutions', function (Builder $query) {
        //     $query->where('student_id', auth()->user()->id);
        // })
        // ->

        // whereNotNull('species_id')
        // ->join('species', 'evolutions.species_id', '=', 'species.id')
        // ->get();

        return response()->json(
            $userCreatures
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
