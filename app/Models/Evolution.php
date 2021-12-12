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

    public function users() {
        return $this->belongsToMany(User::class, 'students');
    }
}
