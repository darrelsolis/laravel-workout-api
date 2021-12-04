<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutSession extends Model
{
    use HasFactory;

    public function workouts()
    {
        return $this->hasMany(Workout::class);
    }

    public function workoutSets()
    {
        return $this->hasManyThrough(WorkoutSet::class, Workout::class);
    }
}
