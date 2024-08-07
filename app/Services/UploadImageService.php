<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Facades\Str;

class UploadImageService
{
    static public function withFile($file, $relativePath, $replace = false)
    {
        $token = env('SUPERBASE_API_SECRET_KEY');

        $filename = $file->getClientOriginalName();
        $filename_safe = Str::slug($filename);

        $image_url = sprintf('%s/storage/v1/object/users/%s/%s', env('SUPERBASE_URL'), $relativePath, $filename_safe);
        $response = Http::withToken($token)
            ->withBody(file_get_contents($file), $filename)
            ->post($image_url);

        if ($response->status() >= 400 && $replace) {
            $response = Http::withToken($token)
                ->withBody(file_get_contents($file), $filename)
                ->put($image_url);
        }
        $public_image_url = sprintf('%s/storage/v1/object/public/users/%s/%s', env('SUPERBASE_URL'), $relativePath, $filename_safe);
        return $public_image_url;
    }
}
