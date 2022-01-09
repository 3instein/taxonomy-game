<?php

namespace App\Http\Livewire;

use App\Models\Species;
use Livewire\Component;
use App\Models\Evolution;
use App\Models\UserCreature;
use App\Models\UserEvolution;
use Illuminate\Database\Eloquent\Builder;

class Sidebar extends Component
{

    public $power;
    
    protected $listeners = [
        'refreshSidebar' => '$refresh',
    ];

    public function mount($power)
    {
        $this->power = $power;
    }

    public function getUserCreaturesProperty(){
        return UserCreature::where('student_id', auth()->user()->id)->get();
    }

    public function getSpeciesProperty()
    {
        return
            Species::whereDoesntHave('userCreatures', function (Builder $query) {
                $query->where('student_id', auth()->user()->id);
            })
            ->where(function ($query) {
                $query->whereNull('prerequisite_id');
                $query->orWhereIn('prerequisite_id', $this->userCreatures->pluck('species_id'));
            })
            ->get();
    }

    public function getUserEvolutionsProperty(){
        return UserEvolution::where('student_id', auth()->user()->id)->get();
    }

    public function getEvolutionsProperty()
    {
        return
            Evolution::whereDoesntHave('user', function (Builder $query) {
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
    }

    public function render()
    {
        return view('livewire.sidebar');
    }
}
