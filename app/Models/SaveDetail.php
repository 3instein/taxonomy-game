<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveDetail extends Model {
    use HasFactory;

    public function userSave() {
        return $this->belongsTo(UserSave::class);
    }

    public function species() {
        return $this->belongsTo(Species::class);
    }
}
