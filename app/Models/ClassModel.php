<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model {
    use HasFactory;

    protected $table = 'bio10_classes';

    protected $guarded = ['id'];

    public function phylum() {
        return $this->belongsTo(Phylum::class);
    }
}
