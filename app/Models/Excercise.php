<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excercise extends Model
{
    use HasFactory;

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function excerciseType()
    {
        return $this->belongsTo(ExcerciseType::class);
    }
}
