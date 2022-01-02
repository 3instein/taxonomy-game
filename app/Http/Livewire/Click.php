<?php

namespace App\Http\Livewire;

use App\Models\CreatureEvolution;
use App\Models\Evolution;
use App\Models\Species;
use App\Models\UserCreature;
use Livewire\Component;

class Click extends Component {
    public function render() {
        return view('livewire.click', [
            'species' => Species::all(),
            'evolutions' => Evolution::all(),
            'creatureEvolutions' => CreatureEvolution::all(),
            'userCreatures' => UserCreature::where('student_id', auth()->user()->id)->get()
        ]);
    }
}
