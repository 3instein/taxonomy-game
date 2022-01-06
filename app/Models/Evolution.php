<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evolution extends Model {
    use HasFactory;

    protected $guarded = ['id'];

    public function prerequisite() {
        return $this->belongsTo(self::class);
    }

    public function user() {
        return $this->hasMany(UserEvolution::class);
    }

    public function species(){
        return $this->belongsTo(Species::class, 'species_id');
    }
}
