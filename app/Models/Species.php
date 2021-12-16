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

    public function creatureEvolutions() {
        return $this->hasMany(CreatureEvolution::class);
    }

    public function creature() {
        return $this->hasMany(UserCreature::class);
    }
}
