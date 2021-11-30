<?php

namespace App\Http\Livewire;

use App\Models\UserSave;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Click extends Component {

    public function increment() {
       $userSave = UserSave::where('user_id', auth()->user()->id)->first();
       $userSave->update([
           'evo' => $userSave->evo + 1
       ]);
    }

    public function render() {
        return view('livewire.click');
    }
}
