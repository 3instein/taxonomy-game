<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upgrade extends Model {
    use HasFactory;

    protected $table = 'upgrades';
    protected $guarded = ['id'];

    public function saveUpgrades() {
        return $this->hasMany(SaveUpgrade::class);
    }

    public function preresquisite() {
        return $this->belongsTo(self::class);
    }
}
