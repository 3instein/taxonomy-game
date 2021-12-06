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

    public function creatures() {
        return $this->hasMany(SaveCreature::class, 'save_id');
    }

    public function upgrades() {
        return $this->hasMany(SaveUpgrade::class, 'upgrade_id');
    }
}
