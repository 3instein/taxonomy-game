<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model {
    use HasFactory;

    protected $table = 'bio10_orders';

    protected $guarded = ['id'];

    public function class() {
        return $this->belongsTo(ClassModel::class);
    }
}
