<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\VesselsController;
use App\Http\Controllers\RidController;
use App\Http\Controllers\KGController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// API V1
Route::prefix('v1')->group(function () {

    // Users
    Route::post('register', [RegisterController::class, 'register']);
    Route::post('login', [RegisterController::class, 'login']);

    // Auth Routes
    // Route::middleware('auth:api')->group( function () {

        // Projects
        Route::apiResource('projects', ProjectsController::class);
        Route::get('projects', [ProjectsController::class, 'projects_index']);
        Route::get('project/{id}', [ProjectsController::class, 'show_project']);
        Route::get('project/{id}/edit', [ProjectsController::class, 'update_project']);

        // Organizations
        Route::get('organizations', [OrganizationController::class, 'organizations_index']);
        Route::get('organization/{id}', [OrganizationController::class, 'show_organization']);

        // Vessels
        Route::get('vessels', [VesselsController::class, 'vessels_index']);
        Route::get('vessel/{id_infrastructure}', [VesselsController::class, 'show_vessel']);
        Route::get('vessel/{id_infrastructure}/edit', [VesselsController::class, 'update_vessel']);

        // InfoHub
        Route::get('infohub/{id}', [ProjectsController::class, 'infohub_show']);
        Route::get('infohub/create', [ProjectsController::class, 'infohub_create']);
        Route::post('infohub', [ProjectsController::class, 'infohub_store']);

        // RID
        Route::apiResource('rid', RidController::class);

        // KG
        Route::apiResource('kg', KGController::class);

    // });

});

