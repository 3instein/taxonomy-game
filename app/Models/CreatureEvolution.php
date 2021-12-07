<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatureEvolution extends Model {
    use HasFactory;

    protected $table = 'creatures_evolutions';
    protected $guarded = ['id'];

    public function creatureSpecies() {
        return $this->hasOne(Species::class);
    }

    public function prerequisiteCreature() {
        return $this->belongsTo(self::class);
    }

    public function creatureEvolutions() {
        return $this->belongsToMany('App\UserCreature', 'user_creatures');
    }
}
