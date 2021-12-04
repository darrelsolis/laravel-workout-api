<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuscleGroup\Manage as MuscleGroupsController;
use App\Http\Controllers\Exercise\Manage as ExercisesController;
use App\Http\Controllers\WorkoutSession\Manage as WorkoutSessionsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('muscle-groups', MuscleGroupsController::class);
Route::resource('exercises', ExercisesController::class);

Route::resource('workout-sessions', WorkoutSessionsController::class);

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
