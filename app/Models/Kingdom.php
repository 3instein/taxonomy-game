<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kingdom extends Model {
    use HasFactory;

    protected $guarded = ['id'];

    public function domain() {
        return $this->belongsTo(Domain::class);
    }
}
