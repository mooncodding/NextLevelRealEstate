<?php

use App\Http\Controllers\API\CountryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserAuthController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\PermissionController;
use App\Http\Controllers\API\SettingController;
use App\Http\Controllers\API\GeneralController;
use App\Http\Controllers\API\ProfileController;

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

Route::post('/login', [UserAuthController::class, 'login']);

Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::apiResources(['users' => UserController::class]);
    Route::apiResources(['roles' => RoleController::class]);
    Route::apiResources(['permissions' => PermissionController::class]);
    Route::apiResources(['settings'=> SettingController::class]);
    Route::apiResources(['profiles'=> ProfileController::class]);
    Route::apiResources(['countries' => CountryController::class]);

    // GENERAL CONTROLLER ROUTES
    // Get All Permissions
    Route::get('/getAllPermissions', [GeneralController::class, 'getAllPermissions']);
    // Get All Roles
    Route::get('/getAllRoles', [GeneralController::class, 'getAllRoles']);
    // Get Settings Data
    Route::get('/getSetting', [GeneralController::class, 'getSetting']);
    // Update Module In All Permissions
    Route::get('/updateModuleInAllPermissions', [PermissionController::class, 'updateModuleInAllPermissions']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});