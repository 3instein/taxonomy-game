<?php

namespace App\Http\Livewire;

use App\Models\Species;
use Livewire\Component;
use App\Models\Evolution;
use App\Models\UserCreature;
use App\Models\UserEvolution;
use Illuminate\Database\Eloquent\Builder;

class Sidebar extends Component {

    public $species, $evolutions, $userCreatures, $userEvolutions, $power;

    public function mount($power) {
        $this->power = $power;
    }

    public function render() {
        $this->userCreatures = UserCreature::where('student_id', auth()->user()->id)->get();

        $this->species =
            Species::whereDoesntHave('userCreatures', function (Builder $query) {
                $query->where('student_id', auth()->user()->id);
            })
            ->where(function ($query) {
                $query->whereNull('prerequisite_id');
                $query->orWhereIn('prerequisite_id', $this->userCreatures->pluck('species_id'));
            })
            ->get();

        $this->userEvolutions = UserEvolution::where('student_id', auth()->user()->id)->get();

        $this->evolutions =
            Evolution::whereDoesntHave('userEvolutions', function (Builder $query) {
                $query->where('student_id', auth()->user()->id);
            })
            ->where(function ($query) {
                $query->whereNull('prerequisite_id');
                $query->orWhereIn('prerequisite_id', $this->userEvolutions->pluck('evolution_id'));
            })
            ->where(function ($query) {
                $query->whereNull('species_id');
                $query->orWhereIn('species_id', $this->userCreatures->pluck('species_id'));
            })
            ->get();
        return view('livewire.sidebar');
    }
}
