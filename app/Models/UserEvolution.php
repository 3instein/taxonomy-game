<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserEvolution extends Model
{
    use HasFactory;

    protected $table = 'bio10_user_evolutions';

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'student_id');
    }

    public function evolution(){
        return $this->belongsTo(Evolution::class);
    }
}
