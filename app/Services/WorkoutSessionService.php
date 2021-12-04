<?php

namespace App\Services;

use App\Models\Exercise;
use App\Models\WorkoutSession;

class WorkoutSessionService
{
    public function getWorkoutDetails($workoutSession): array
    {
        $workoutArr = [];
        foreach ($workoutSession->workouts as $workout) {
            $exercise = Exercise::find($workout->exercise_id);
            $muscleGroups = $this->getMuscleGroups($exercise);
            $setDetails = $this->getSetDetails($workout);
            $data = [
                'workout_id' => $workout->id,
                'exercise_id' => $exercise->id,
                'exercise_name' => $exercise->name,
                'muscle-groups' => $muscleGroups,
                'number_of_sets' => $workout->number_of_sets,
                'sets' => $setDetails
            ];
            array_push($workoutArr, $data);
        }
        return $workoutArr;
    }


    public function getMuscleGroups($exercise): array
    {
        $muscleGroups = [];
        foreach ($exercise->muscleGroups as $muscleGroup) {
            array_push($muscleGroups, $muscleGroup->name);
        }
        return $muscleGroups;
    }

    public function getSetDetails($workout): array
    {
        $setNumber = 1;
        $setDetails = [];
        foreach ($workout->workoutSets as $set) {
            $setArr = [
                'set_number' => $setNumber,
                'repetition' => $set->repetition,
                'duration' => $set->duration,
                'weight' => $set->weight,
                'weight_in_metric' => $set->weight_in_metric
            ];
            array_push($setDetails, $setArr);
            $setNumber++;
        }
        return $setDetails;
    }
}
