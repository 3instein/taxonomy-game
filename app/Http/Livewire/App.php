<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\UserCreature;
use App\Models\UserStat;
use Livewire\Component;

class App extends Component {

    public $evo = 0, $power, $userStat, $user;

    protected $listeners = [
        'addEvo' => 'click',
        'upgradePower' => 'upgradePower',
        'unlockCreature' => 'unlockCreature',
        'unlockEvolution' => 'unlockEvolution'
    ];

    public function click() {
        $this->userStat->update([
            'evo' => $this->evo + $this->power
        ]);
    }

    public function upgradePower() {
        if ($this->userStat->evo > $this->userStat->power) {
            $this->userStat->update([
                'power' => $this->userStat->power + 1,
                'evo' => $this->evo - $this->userStat->power
            ]);
        }
    }

    public function unlockCreature($species) {
        UserCreature::create([
            'student_id' => $this->user->id,
            'species_id' => $species['id']
        ]);

        $this->user->update([
            'evo' => $this->userStat->evo - $species['price']
        ]);
    }

    public function unlockEvolution($id){
        
    }

    public function render() {
        $this->user = User::whereId(auth()->user()->id)->first();
        $this->userStat = UserStat::where('student_id', $this->user->id)->first();
        $this->evo = $this->userStat->evo;
        $this->power = $this->userStat->power;
        return view('livewire.app');
    }
}
