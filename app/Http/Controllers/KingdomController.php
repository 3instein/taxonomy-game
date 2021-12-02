<?php

namespace App\Http\Controllers;

use App\Models\Kingdom;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class KingdomController extends Controller
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
        $request->validate([
            'domain_id' => ['exists:domains'],
            'name' => ['string', 'unique:kingdoms']
        ]);

        Kingdom::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kingdom  $kingdom
     * @return \Illuminate\Http\Response
     */
    public function show(Kingdom $kingdom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kingdom  $kingdom
     * @return \Illuminate\Http\Response
     */
    public function edit(Kingdom $kingdom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kingdom  $kingdom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kingdom $kingdom)
    {
        $request->validate([
            'name' => ['string', Rule::unique('kingdoms')->ignore($kingdom->name, 'name')],
        ]);

        $kingdom->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kingdom  $kingdom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kingdom $kingdom)
    {
        $kingdom->delete();
    }
}
