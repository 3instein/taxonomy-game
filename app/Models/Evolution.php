<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evolution extends Model {
    use HasFactory;

    protected $table = 'evolutions';
    protected $guarded = ['id'];

    public function prerequisite() {
        return $this->belongsTo(self::class);
    }

    public function userEvolutions() {
        return $this->belongsToMany(User::class, 'user_evolutions', 'student_id', 'evolution_id');
    }

    public function creature(){
        return $this->belongsTo(Species::class, 'species_id');
    }
}
