<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSave extends Model {
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function student() {
        return $this->belongsTo(User::class);
    }

    public function saveCreatures() {
        return $this->hasMany(SaveCreature::class);
    }

    public function saveUpgrades() {
        return $this->hasMany(SaveUpgrade::class);
    }
}
