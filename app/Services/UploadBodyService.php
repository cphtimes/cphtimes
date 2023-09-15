<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UploadBodyService {
    static public function withData($data, $relativePath, $replace=false) {
        $token = env('SUPERBASE_API_SECRET_KEY');
  
        $body_url = sprintf('%s/storage/v1/object/users/%s/%s', env('SUPERBASE_URL'), $relativePath, 'body.html');
  
        $response = Http::withToken($token)
                        ->withBody($data, 'text/html')
                        ->post($body_url);
  
        if ($response->status() >= 400 && $replace) {
          $response = Http::withToken($token)
                        ->withBody($data, 'text/html')
                        ->put($body_url);
        }
        
        $public_body_url = sprintf("%s/storage/v1/object/public/users/%s/%s", env('SUPERBASE_URL'), $relativePath, 'body.html');
        return $public_body_url;
      }
}