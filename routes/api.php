<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PromotionController;
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

Route::get('/sku/{sku}', [ItemController::class, 'searchSku']);
Route::get('/itid/{it_id}', [ItemController::class, 'searchItId']);
Route::get('/promotion/{idx}', [PromotionController::class, 'searchIdx']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
