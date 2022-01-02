<?php

namespace App\Http\Livewire;

use App\Models\CreatureEvolution;
use App\Models\Evolution;
use App\Models\Species;
use App\Models\UserCreature;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;

class Click extends Component
{

    public $species, $evolutions, $creatureEvolutions, $userCreatures;

    public function render()
    {
        $this->species = Species::all();
        $this->evolutions = Evolution::whereDoesntHave('creature')->get();
        $this->creatureEvolutions = Evolution::has('creature')->get();
        $this->userCreatures = UserCreature::where('student_id', auth()->user()->id)->get();

        return view('livewire.click');
    }
}
