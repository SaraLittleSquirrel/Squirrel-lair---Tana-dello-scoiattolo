<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excercise extends Model
{
    use HasFactory;

    public function templates()
    {
        return $this->belongsTo(Template::class);
    }

    public function excercise_type()
    {
        return $this->belongsTo(ExcerciseType::class);
    }
}
