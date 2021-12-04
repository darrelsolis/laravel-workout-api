<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    public function exercise()
    {
        return $this->belongsTo(Exercise::class);
    }

    public function workoutSession()
    {
        return $this->belongsTo(WorkoutSession::class);
    }

    public function workoutSets()
    {
        return $this->hasMany(WorkoutSet::class)->oldest();
    }
}
