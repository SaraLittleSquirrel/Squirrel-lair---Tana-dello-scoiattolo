<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcerciseType extends Model
{
    use HasFactory;

    public function excercise()
    {
        return $this->hasMany(Excercise::class);
    }

    public function gymUser()
    {
        return $this->belongsTo(GymUser::class);
    }
}