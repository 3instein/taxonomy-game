<?php

namespace App\Http\Controllers;

use App\Models\Phylum;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PhylumController extends Controller
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
            'kingdom_id' => ['exists:kingdoms'],
            'name' => ['string', 'unique:phyla']
        ]);

        Phylum::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phylum  $phylum
     * @return \Illuminate\Http\Response
     */
    public function show(Phylum $phylum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phylum  $phylum
     * @return \Illuminate\Http\Response
     */
    public function edit(Phylum $phylum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phylum  $phylum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phylum $phylum)
    {
        $request->validate([
            'name' => ['string', Rule::unique('phyla')->ignore($phylum->name, 'name')],
        ]);

        $phylum->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phylum  $phylum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phylum $phylum)
    {
        $phylum->delete();
    }
}
