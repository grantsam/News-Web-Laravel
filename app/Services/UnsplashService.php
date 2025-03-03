<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UnsplashService
{
    public function getRandomImage($query = 'news')
    {
        $photo = [];
        
        try {
            $response = Http::get('https://api.unsplash.com/photos/random', [
                'client_id' => config('services.unsplash.access_key'),
                'query' => $query
            ]);
            
            if ($response->successful() && !empty($response->json())) {
                $photo = $response->json();
            }
        } catch (\Exception $e) {
            Log::error('Unsplash API error: ' . $e->getMessage());
        }
        
        
        return $photo;
    }
}