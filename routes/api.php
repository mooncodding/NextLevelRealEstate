<?php

use App\Http\Controllers\API\AmenityController;
use App\Http\Controllers\API\AreaController;
use App\Http\Controllers\API\CountryController;
use App\Http\Controllers\API\DeveloperController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserAuthController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\RoleController;
use App\Http\Controllers\API\PermissionController;
use App\Http\Controllers\API\SettingController;
use App\Http\Controllers\API\GeneralController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\PropertyStatusController;
use App\Http\Controllers\API\PropertyTypeController;
use App\Http\Controllers\API\StatusController;
use App\Http\Controllers\API\TagController;

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
    Route::apiResources(['tags' => TagController::class]);
    Route::apiResources(['propertyTypes' => PropertyTypeController::class]);
    Route::apiResources(['propertyStatus' => PropertyStatusController::class]);
    Route::apiResources(['developers' => DeveloperController::class]);
    Route::apiResources(['amenities' => AmenityController::class]);
    Route::apiResources(['adminAreas' => AreaController::class]);

    // GENERAL CONTROLLER ROUTES
    // Get All Permissions
    Route::get('/getAllPermissions', [GeneralController::class, 'getAllPermissions']);
    // Get All Roles
    Route::get('/getAllRoles', [GeneralController::class, 'getAllRoles']);
    // Get Settings Data
    Route::get('/getSetting', [GeneralController::class, 'getSetting']);
    // Update Module In All Permissions
    Route::get('/updateModuleInAllPermissions', [PermissionController::class, 'updateModuleInAllPermissions']);
    // Update Module In All Permissions
    Route::get('/getAllDevelopers', [GeneralController::class, 'getAllDevelopers']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});