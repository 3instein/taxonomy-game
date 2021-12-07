<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upgrade extends Model {
    use HasFactory;

    protected $table = 'upgrades';
    protected $guarded = ['id'];

    public function preresquisiteEvolution() {
        return $this->belongsTo(self::class);
    }

    public function userCreatureEvolutions() {
        return $this->belongsToMany('App\Student', 'students');
    }
}
