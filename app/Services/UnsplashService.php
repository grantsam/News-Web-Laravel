<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class UnsplashService
{
    private $accessKey;

    public function __construct()
    {
        $this->accessKey = config('services.unsplash.access_key');
    }

    public function getRandomImage()
    {
        try {
            $response = Http::withHeaders([
                'Authorization' => 'Client-ID ' . $this->accessKey
            ])->get('https://api.unsplash.com/photos/random', [
                'orientation' => 'landscape',
                'count' => 1
            ]);

            // Log full response for debugging
            Log::info('Unsplash API Response', [
                'status' => $response->status(),
                'body' => $response->body()
            ]);

            if ($response->successful()) {
                $photo = $response->json()[0];
                return [
                    'urls' => $photo['urls'],
                    'alt_description' => $photo['alt_description'] ?? 'Random landscape image',
                    'photographer' => $photo['user']['name'] ?? 'Unknown',
                ];
            } else {
                // Log specific error details
                Log::error('Unsplash API Error', [
                    'status' => $response->status(),
                    'body' => $response->body()
                ]);
            }
        } catch (\Exception $e) {
            Log::error('Unsplash API Exception', [
                'message' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
        }

        // Fallback to a standard random image URL
        return [
            'urls' => [
                'regular' => 'https://picsum.photos/1200/400'
            ],
            'alt_description' => 'Random placeholder image',
            'photographer' => 'Lorem Picsum'
        ];
    }
}
