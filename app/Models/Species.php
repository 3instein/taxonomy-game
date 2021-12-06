<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model {
    use HasFactory;

    protected $guarded = ['id'];

    public function genus() {
        return $this->belongsTo(Genus::class);
    }

    public function creatureUpgrades() {
        return $this->hasMany(CreatureUpgrade::class);
    }

    public function saveCreature() {
        return $this->belongsTo(SaveCreature::class);
    }
}
