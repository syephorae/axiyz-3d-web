<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Google\Client;
use App\Models\GoogleToken;

class ReviewController extends Controller
{
    /**
     * Fetch Google Reviews for aXiYZ 3D Studios using the local JSON repository.
     * This bypasses all Google API quotas and provides 100% reliability.
     */
    public function fetchGoogleReviews()
    {
        $filePath = database_path('data/reviews.json');
        $lastUpdated = \Illuminate\Support\Facades\File::exists($filePath) 
            ? \Illuminate\Support\Facades\File::lastModified($filePath) 
            : null;

        if (!\Illuminate\Support\Facades\File::exists($filePath)) {
            return $this->fetchPlacesApiFallback();
        }

        try {
            $json = \Illuminate\Support\Facades\File::get($filePath);
            $rawReviews = json_decode($json, true);

            // Surgical Mapping: Match EXACTLY what testimonials.blade.php JavaScript expects
            $reviews = array_map(function ($item) {
                return [
                    'text' => $item['snippet'] ?? $item['text'] ?? '',
                    'rating' => $item['rating'] ?? 5,
                    'author_name' => $item['user']['name'] ?? $item['author_name'] ?? 'Anonymous',
                    'profile_photo_url' => $item['user']['thumbnail'] ?? $item['author_image'] ?? null,
                    'project_photos' => $item['images'] ?? [],
                    'relative_time_description' => $item['date'] ?? 'Recent',
                ];
            }, $rawReviews);

            return response()->json([
                'reviews' => $reviews,
                'rating' => 5.0,
                'total_reviews' => count($reviews),
                'last_updated' => $lastUpdated ? date('F j, Y, g:i A', $lastUpdated) : 'Never',
                'source' => 'serpapi_local'
            ]);

        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error("Surgical Snag reading reviews.json: " . $e->getMessage());
            return $this->fetchPlacesApiFallback();
        }
    }

    /**
     * Fallback to the public Places API if Business Profile fetch fails.
     */
    private function fetchPlacesApiFallback()
    {
        $placeId = 'ChIJlQ2JwczdzTER7jLWT8TUV-I';
        $apiKey = config('services.google_places.key');

        if (!$apiKey) {
            return response()->json(['error' => 'No review sources configured.'], 500);
        }

        $url = "https://maps.googleapis.com/maps/api/place/details/json?place_id={$placeId}&fields=reviews,rating,user_ratings_total&key={$apiKey}";
        $response = Http::get($url);

        if ($response->successful()) {
            $data = $response->json();
            $reviews = $data['result']['reviews'] ?? [];
            $sortedReviews = collect($reviews)->sortByDesc('time')->values()->all();

            return response()->json([
                'reviews' => $sortedReviews,
                'rating' => $data['result']['rating'] ?? 5.0,
                'total_reviews' => $data['result']['user_ratings_total'] ?? 0,
                'source' => 'places_api'
            ]);
        }

        return response()->json(['error' => 'Failed to fetch reviews.'], 500);
    }
}
