<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveCreatureUpgrade extends Model {
    use HasFactory;

    protected $table = 'save_creatures_upgrades';

    public function creatureUpgrades() {
        return $this->belongsTo(CreatureUpgrade::class);
    }

    public function saveCreature() {
        return $this->belongsTo(SaveCreature::class);
    }
}
