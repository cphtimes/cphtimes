<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Facades\Str;

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
Route::get('/healthz', function (Request $request) {
    return Response::json([
        'status' => 'uptime'
    ], 200);
});

Route::post('/subscribe', [NewsletterController::class, 'subscribe']);

Route::post('uploadFile', function (Request $request) {
    $base_url = env('SUPERBASE_URL');
    $token = env('SUPERBASE_API_SECRET_KEY');

    $file = $request->file('image');

    $now = Carbon::now();
    $year = $now->format('Y');
    $month = $now->format('m');
    $day = $now->format('d');

    $filename = $file->getClientOriginalName();

    $file_url = sprintf('%s/storage/v1/object/images/%s/%s/%s/%s', $base_url, $year, $month, $day, Str::slug($filename));

    $response = Http::withToken($token)
        ->withBody(file_get_contents($file), $file->getClientMimeType())
        ->post($file_url);

    // check the status of the response?
    if ($response->status() >= 400) {
        return Response::json($response->json(), $response->status());
    }

    $public_file_url = sprintf('%s/storage/v1/object/public/images/%s/%s/%s/%s', $base_url, $year, $month, $day, Str::slug($filename));

    return Response::json([
        "success" => 1,
        "file" => [
            "url" => $public_file_url
        ]
    ], 200);
}); // ->middleware(['author']);

Route::post('fetchUrl', function (Request $request) {
    if ($request->missing('url')) {
        return Response::json([
            'error' => 'Missing the url to be fetched.'
        ], 400);
    }

    $base_url = env('SUPERBASE_URL');
    $token = env('SUPERBASE_API_SECRET_KEY');

    $url = $request["url"];

    $now = Carbon::now();
    $year = $now->format('Y');
    $month = $now->format('m');
    $day = $now->format('d');

    $filename = $url;

    $file_url = sprintf('%s/storage/v1/object/images/%s/%s/%s/%s', $base_url, $year, $month, $day, Str::slug($filename));

    $response = Http::withToken($token)
        ->withBody(file_get_contents($url), 'application/octet-stream')
        ->post($file_url);

    // check the status of the response?
    if ($response->status() >= 400) {
        return Response::json($response->json(), $response->status());
    }

    $public_file_url = sprintf('%s/storage/v1/object/public/images/%s/%s/%s/%s', $base_url, $year, $month, $day, Str::slug($filename));

    return Response::json([
        "success" => 1,
        "file" => [
            "url" => $public_file_url
        ]
    ], 200);
}); // ->middleware(['author']);
