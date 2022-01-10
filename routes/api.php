<?php

use App\Http\Controllers\AuthenticationApiController;
use App\Http\Controllers\CreatureApiController;
use App\Http\Controllers\CreaturesEvolutionsApiController;
use App\Http\Controllers\EvolutionsApiController;
use App\Http\Controllers\LogApiController;
use App\Http\Controllers\QuizApiController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\UserCreatureApiController;
use App\Http\Controllers\UserEvolutionApiController;
use App\Http\Controllers\UserStatsApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthenticationApiController::class, 'login']);

Route::post('/register', [AuthenticationApiController::class, 'register']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('saves', SaveController::class);
    Route::resource('evolutions', EvolutionsApiController::class);
    Route::resource('user-creatures', UserCreatureApiController::class);
    Route::resource('user-evolutions', UserEvolutionApiController::class);
    Route::resource('creatures', CreatureApiController::class);
    Route::resource('creatures-evolutions', CreaturesEvolutionsApiController::class);
    // Route::resource('quiz', QuizApiController::class);
    Route::resource('log', LogApiController::class);
    Route::get('leaderboard', [UserStatsApiController::class, 'leaderboard']);
    Route::get('/upgrade-power', [UserStatsApiController::class, 'upgradePower']);
    Route::post('/unlock-creature', [CreatureApiController::class, 'unlockCreature']);
    Route::post('/save-user-stats', [UserStatsApiController::class, 'saveUserStat']);
    Route::post('/logout', [AuthenticationApiController::class, 'logout']);
});
