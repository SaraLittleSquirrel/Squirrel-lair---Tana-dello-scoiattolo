<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymUser extends Model
{
    use HasFactory;

    public function templates()
    {
        return $this->hasMany(Template::class);
    }

    public function excerciseTypes()
    {
        return $this->hasMany(ExcerciseType::class);
    }
}

