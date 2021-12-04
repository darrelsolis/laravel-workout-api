<?php

namespace App\Http\Controllers\WorkoutSession;

use App\Http\Controllers\Controller;
use App\Models\Exercise;
use App\Models\WorkoutSession;
use App\Services\WorkoutSessionService;
use Illuminate\Http\Request;

class Manage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workoutSession = WorkoutSession::find($id);
        $wss = new WorkoutSessionService();
        $workoutDetails = $wss->getWorkoutDetails($workoutSession);
        $finalData = [
            'workout_details' => $workoutDetails,
            'started_at' => $workoutSession->started_at,
            'ended_at' => $workoutSession->ended_at
        ];
        return response($finalData, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
