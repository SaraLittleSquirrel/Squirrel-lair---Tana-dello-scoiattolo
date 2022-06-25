<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcerciseType extends Model
{
    use HasFactory;

    public function excercises()
    {
        return $this->hasMany(Excercise::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
