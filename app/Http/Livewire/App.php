<?php

namespace App\Http\Livewire;

use App\Models\SaveCreature;
use App\Models\User;
use App\Models\UserSave;
use Livewire\Component;

class App extends Component {
    protected $listeners = [
        'addEvo' => 'click',
        'upgradePower' => 'upgradePower',
        'unlockCreature' => 'unlockCreature'
    ];

    public function click() {
        $user = User::whereId(auth()->user()->id)->first();
        $user->update([
            'evo' => $user->evo + $user->power
        ]);
    }

    public function upgradePower() {
        $userSave = UserSave::where('student_id', auth()->user()->id)->first();
        $evo = $userSave->evo;

        if ($evo > $userSave->power) {
            $userSave->update([
                'power' => $userSave->power + 1,
                'evo' => $evo - $userSave->power
            ]);
        }
    }

    public function unlockCreature($species_id) {
        $userSave = UserSave::where('student_id', auth()->user()->id)->first();

        SaveCreature::create([
            'save_id' => $userSave->id,
            'species_id' => $species_id
        ]);
    }

    public function render() {
        return view('livewire.app');
    }
}
