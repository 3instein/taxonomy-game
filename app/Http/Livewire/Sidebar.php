<?php

namespace App\Http\Livewire;

use App\Models\CreatureEvolution;
use App\Models\Evolution;
use App\Models\Species;
use App\Models\UserCreature;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Sidebar extends Component {

    public $species, $evolutions, $userEvolutions, $creatureEvolutions;

    public function render() {
        $this->species =
            Species::whereDoesntHave('creature', function (Builder $query) {
                $query->where('student_id', auth()->user()->id);
            })->get();

        $this->userEvolutions = Evolution::whereDoesntHave('userEvolutions', function (Builder $query) {
            $query->where('student_id', auth()->user()->id);
        })->get();

        $this->creatureEvolutions = CreatureEvolution::whereDoesntHave('userCreatureEvolutions', function (Builder $query) {
            $query->where('student_id', auth()->user()->id);
        })->get();

        return view('livewire.sidebar');
    }
}
