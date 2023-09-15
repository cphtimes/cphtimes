<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class UploadBlocksService {
    static public function withData($data, $relativePath, $replace=false) {
        $token = env('SUPERBASE_API_SECRET_KEY');
  
        $blocks_url = sprintf('%s/storage/v1/object/users/%s/%s', env('SUPERBASE_URL'), $relativePath, 'blocks.json');
        $response = Http::withToken($token)
                        ->withBody($data, 'application/json')
                        ->post($blocks_url);
  
        if ($response->status() >= 400 && $replace) {
          $response = Http::withToken($token)
                        ->withBody($data, 'application/json')
                        ->put($blocks_url);
        }
  
        $public_blocks_url = sprintf('%s/storage/v1/object/public/users/%s/%s', env('SUPERBASE_URL'), $relativePath, 'blocks.json');
        return $public_blocks_url;
    }
}