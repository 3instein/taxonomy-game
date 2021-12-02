<?php

namespace App\Http\Livewire;

use App\Models\SaveDetail;
use App\Models\UserSave;
use Livewire\Component;

class App extends Component {
    protected $listeners = [
        'addEvo' => 'click',
        'upgradePower' => 'upgradePower',
        'unlockCreature' => 'unlockCreature'
    ];

    public function click() {
        $userSave = UserSave::where('user_id', auth()->user()->id)->first();
        $userSave->update([
            'evo' => $userSave->evo + $userSave->power
        ]);
    }

    public function upgradePower() {
        $userSave = UserSave::where('user_id', auth()->user()->id)->first();
        $evo = $userSave->evo;

        if ($evo > $userSave->power) {
            $userSave->update([
                'power' => $userSave->power + 1,
                'evo' => $evo - $userSave->power
            ]);
        }
    }

    public function unlockCreature() {
        $userSave = UserSave::where('user_id', auth()->user()->id)->first();

        SaveDetail::create([
            'save_id' => $userSave->id,
            'species_id' => 1
        ]);
    }

    public function render() {
        return view('livewire.app');
    }
}
