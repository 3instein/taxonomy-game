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

    public function evolutions() {
        return $this->hasMany(Evolution::class);
    }

    public function userCreatures() {
        return $this->hasMany(UserCreature::class);
    }

    public function prerequisite() {
        return $this->belongsTo(self::class);
    }
}
