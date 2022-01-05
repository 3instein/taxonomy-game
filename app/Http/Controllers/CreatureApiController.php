<?php

namespace App\Http\Controllers;

use App\Models\Species;
use App\Models\UserCreature;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class CreatureApiController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $species = Species::whereDoesntHave('userCreatures', function (Builder $query) {
            $query->where('student_id', auth()->user()->id);
        })->where(function ($query) {
            $userCreatures = UserCreature::where('student_id', auth()->user()->id)->get();
            $query->whereNull('prerequisite_id');
            $query->orWhereIn('prerequisite_id', $userCreatures->pluck('species_id'));
        })->get();

        return response()->json([
            'creatures' => $species
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
        $species = Species::with([
            'genus:id,name,family_id',
            'genus.family:id,name,order_id',
            'genus.family.order:id,name,class_id',
            'genus.family.order.class:id,name,phylum_id',
            'genus.family.order.class.phylum:id,name,kingdom_id',
            'genus.family.order.class.phylum.kingdom:id,name,domain_id',
            'genus.family.order.class.phylum.kingdom.domain:id,name'
        ])->find($id);
        // $species = Species::whereId($id)
        //     ->with([
        //         'genus' => function ($query) {
        //             return $query->with([
        //                 'family' => function ($query) {
        //                     return $query->with('order');
        //                 }
        //             ]);
        //         }
        //     ])->get();

        return response()->json($species);
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

    /**
     * Unlock creature
     * @param \Illuminate\Http\Request  $request
     * @return void
     */
    public function unlockCreature(Request $request) {
        UserCreature::create([
            'student_id' => auth()->user()->id,
            'species_id' => $request->input('species_id')
        ]);
    }
}
