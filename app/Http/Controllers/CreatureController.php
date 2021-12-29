<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\Domain;
use App\Models\Family;
use App\Models\Genus;
use App\Models\Kingdom;
use App\Models\Order;
use App\Models\Phylum;
use App\Models\Species;
use Illuminate\Http\Request;

class CreatureController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('admin.creatures.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $kingdom = [
            'domain_id' => 1,
            'name' => $request->kingdom
        ];
        $kingdom = Kingdom::create($kingdom);

        $phylum = [
            'kingdom_id' => $kingdom->id,
            'name' => $request->phylum
        ];
        $phylum = Phylum::create($phylum);

        $class = [
            'phylum_id' => $phylum->id,
            'name' => $request->class
        ];
        $class = ClassModel::create($class);

        $order = [
            'class_id' => $class->id,
            'name' => $request->order
        ];
        $order = Order::create($order);

        $family = [
            'order_id' => $order->id,
            'name' => $request->family
        ];
        $family = Family::create($family);

        $genus = [
            'family_id' => $family->id,
            'name' => $request->genus
        ];
        $genus = Genus::create($genus);

        $species = [
            'genus_id' => $genus->id,
            'name' => $request->species,
            'description' => $request->description,
            'price' => $request->price
        ];
        $species = Species::create($species);
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
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
