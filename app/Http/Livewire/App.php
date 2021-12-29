<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserCreature;
use App\Models\UserStat;
use Livewire\Component;

class App extends Component {

    public $evo = 0, $power, $user, $stat;

    protected $listeners = [
        'addEvo' => 'click',
        'upgradePower' => 'upgradePower',
        'unlockCreature' => 'unlockCreature'
    ];

    public function click() {
        $this->evo = 420;
    }

    public function upgradePower() {
        if ($this->user->evo > $this->user->power) {
            $this->user->update([
                'power' => $this->user->power + 1,
                'evo' => $this->evo - $this->user->power
            ]);
        }
    }

    public function unlockCreature($species) {
        UserCreature::create([
            'student_id' => $this->user->id,
            'species_id' => $species['id']
        ]);
        $this->user->update([
            'evo' => $this->user->evo - $species['price']
        ]);
    }

    public function render() {
        $this->user = User::whereId(auth()->user()->id)->first();
        $this->stat = UserStat::where('student_id', $this->user->id)->first();
        $this->evo = $this->user->stat->evo;
        $this->power = $this->user->stat->power;
        return view('livewire.app');
    }
}
