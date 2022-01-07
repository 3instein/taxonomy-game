<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCreature extends Model {
    use HasFactory;
    
    protected $table = 'bio10_user_creatures';

    protected $guarded = [
        'id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function species() {
        return $this->hasOne(Species::class, 'id', 'species_id');
    }
}
