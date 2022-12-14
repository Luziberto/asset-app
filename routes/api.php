<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AssetController;
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

Route::get('assets/{uuid}/history', [AssetController::class, 'getAssetHistory']);
Route::post('assets', [AssetController::class, 'getAssets']);
Route::get('assets/list', [AssetController::class, 'getList']);
Route::post('assets/search', [AssetController::class, 'searchAssets']);
Route::get('assets/{id}', [AssetController::class, 'getAssets']);


Route::post('assets/prices', [AssetController::class, 'getAssetsPrice']);

Route::post('webhook/assets', [AssetController::class, 'webhook']);