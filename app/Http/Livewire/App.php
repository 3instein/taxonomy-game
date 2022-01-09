<?php

namespace App\Http\Livewire;

use App\Models\Evolution;
use App\Models\Log;
use App\Models\Quiz;
use App\Models\Species;
use App\Models\User;
use Livewire\Component;
use App\Models\UserStat;
use App\Models\UserCreature;
use App\Models\UserEvolution;
use Illuminate\Database\Eloquent\Builder;

class App extends Component
{

    public $evo = 0, $power, $userStat, $user, $leaderboard, $creaturePower, $totalCreaturePower = 0, $userCreatures;
    public $upgradeCost;

    protected $listeners = [
        'addEvo' => 'click',
        'upgradePower' => 'upgradePower',
        'unlockCreature' => 'unlockCreature',
        'unlockEvolution' => 'unlockEvolution'
    ];

    public function click()
    {
        if ($this->creaturePower == 0) {
            $this->userStat->update([
                'evo' => $this->evo + $this->power
            ]);
        } else {
            $this->userStat->update([
                'evo' => $this->evo + $this->power * ($this->creaturePower * 0.25)
            ]);
        }
    }

    public function upgradePower()
    {
        if ($this->userStat->evo > $this->userStat->power) {
            $this->userStat->update([
                'power' => $this->userStat->power + 0.02,
                'evo' => $this->evo - $this->upgradeCost
            ]);

            Log::create([
                'table' => app(UserStat::class)->getTable(),
                'student_id' => $this->user->id,
                'description' => 'User id:' . $this->user->id . ' UserStat.power added by ' . 1,
                'ip' => request()->ip()
            ]);

            Log::create([
                'table' => app(UserStat::class)->getTable(),
                'student_id' => $this->user->id,
                'description' => 'User id:' . $this->user->id . ' UserStat.evo subtracted by ' . $this->userStat->power,
                'ip' => request()->ip()
            ]);
            $this->emit('refreshSidebar');
        }
    }

    public function unlockCreature($species)
    {
        if ($this->user->stat->evo >= $species['price']) {
            $this->creaturePower = UserCreature::count() == 0 ? 10 : (UserCreature::count() + 1) * 10;

            UserCreature::create([
                'student_id' => $this->user->id,
                'species_id' => $species['id'],
                'power' => $this->creaturePower
            ]);

            $this->user->stat->update([
                'evo' => $this->user->stat->evo - $species['price']
            ]);
            Log::create([
                'table' => app(UserCreature::class)->getTable(),
                'student_id' => $this->user->id,
                'description' => 'User id:' . $this->user->id . ' unlocked Species id:' . $species['id'],
                'ip' => request()->ip()
            ]);

            Log::create([
                'table' => app(UserStat::class)->getTable(),
                'student_id' => $this->user->id,
                'description' => 'User id:' . $this->user->id . ' UserStat.evo subtracted by ' . $species['price'],
                'ip' => request()->ip()
            ]);
            $this->emit('refreshSidebar');
        }
    }

    public function unlockEvolution($evolution)
    {
        if ($this->user->stat->evo >= $evolution['price']) {
            UserEvolution::create([
                'student_id' => $this->user->id,
                'evolution_id' => $evolution['id']
            ]);

            $this->user->update([
                'evo' => $this->userStat->evo - $evolution['price']
            ]);

            if ($evolution['species_id'] != null && $evolution['species_id'] < 9) {
                $updatedCreature = UserCreature::where('student_id', $this->user->id)->where('species_id', $evolution['species_id'])->first();

                $updatedCreature->update([
                    'power' => $updatedCreature->power * $evolution['percentage']
                ]);
            } else {
                $this->user->stat->update([
                    'power' => $this->user->stat->power * 1.01
                ]);
            }

            Log::create([
                'table' => app(UserEvolution::class)->getTable(),
                'student_id' => $this->user->id,
                'description' => 'User id:' . $this->user->id . ' unlocked Evolution id:' . $evolution['id'],
                'ip' => request()->ip()
            ]);

            Log::create([
                'table' => app(UserStat::class)->getTable(),
                'student_id' => $this->user->id,
                'description' => 'User id:' . $this->user->id . ' UserStat.evo subtracted by ' . $evolution['price'],
                'ip' => request()->ip()
            ]);
            $this->emit('refreshSidebar');
        }
    }

    public function render()
    {
        $this->leaderboard = UserStat::orderByDesc('evo')->orderByDesc('point')->orderByDesc('power')->get();
        $this->user = User::whereId(auth()->user()->id)->first();
        $this->userStat = UserStat::where('student_id', $this->user->id)->first();
        $this->evo = $this->userStat->evo;
        $this->power = $this->userStat->power;
        $this->creaturePower =
            UserCreature::where('student_id', $this->user->id)->sum('power');
        $this->userCreatures = Species::query()
            ->with(['evolutions' => function ($query) {
                $query->has('user');
            }])
            ->whereHas('userCreatures', function ($query) {
                $query->where('student_id', auth()->user()->id);
            })
            ->get();
        $this->upgradeCost = $this->power * 100;
        return view('livewire.app', [
            'quizzes' => Quiz::inRandomOrder()->get()
        ]);
    }
}
