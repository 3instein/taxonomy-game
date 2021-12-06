<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaveUpgrade extends Model {
    use HasFactory;

    protected $table = 'save_upgrades';
    
    public function userSave() {
        return $this->belongsTo(UserSave::class);
    }

    public function upgrade() {
        return $this->belongsTo(Upgrade::class);
    }
}
