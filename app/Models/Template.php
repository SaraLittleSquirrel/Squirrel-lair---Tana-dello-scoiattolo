<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;

    public function gymUser()
    {
        return $this->belongsTo(GymUser::class);
    }

    public function excercises()
    {
        return $this->hasMany(Excercise::class);
    }
}