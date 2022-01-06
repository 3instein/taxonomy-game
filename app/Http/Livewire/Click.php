<?php

namespace App\Http\Livewire;

use App\Models\Species;
use Livewire\Component;
use App\Models\Evolution;
use App\Models\UserCreature;
use App\Models\UserEvolution;
use Illuminate\Database\Eloquent\Builder;

class Click extends Component
{

    public $species, $evolutions, $creatureEvolutions, $userCreatures;

    public function render()
    {
        $this->userCreatures = UserCreature::where('student_id', auth()->user()->id)->get();

        $this->species = Species::all();

        $this->userEvolutions = UserEvolution::where('student_id', auth()->user()->id)->get();

        $this->creatureEvolutions =
            Evolution::whereDoesntHave('user', function (Builder $query) {
                $query->where('student_id', auth()->user()->id);
            })
            ->where(function ($query) {
                $query->whereNull('prerequisite_id');
                $query->orWhereIn('prerequisite_id', $this->userEvolutions->pluck('evolution_id'));
            })
            ->get();

        return view('livewire.click');
    }
}
