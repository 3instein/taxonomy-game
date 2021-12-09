<?php

namespace App\Http\Livewire;

use App\Models\Species;
use Livewire\Component;

class Sidebar extends Component {
    public function render() {
        return view('livewire.sidebar', [
            'specieses' => Species::all()
        ]);
    }
}
