<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeetingsController;
use App\Http\Controllers\NewsletterController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * Health status.
 *
 */
Route::get('/healthz', function(Request $request) {
    return Response::json([
      'status' => 'uptime'
    ], 200);
  });

/**
 * Handles the Meeting entity lifecycle. 
 * Currently support the zoom (provider) webhooks.
 *
 */
Route::any('/meetings', [MeetingsController::class, 'manage']);

Route::post('/subscribe', [NewsletterController::class, 'subscribe']);