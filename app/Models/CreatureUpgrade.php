<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatureUpgrade extends Model {
    use HasFactory;

    protected $table = 'creatures_upgrades';
    protected $guarded = ['id'];

    public function species() {
        return $this->hasOne(Species::class);
    }

    public function prerequisite() {
        return $this->belongsTo(self::class);
    }

    public function saveCreatures() {
        return $this->belongsToMany(SaveCreature::class);
    }
}
