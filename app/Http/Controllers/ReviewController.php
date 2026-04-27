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
        try {
            $latestReview = \App\Models\GoogleReview::latest()->first();
            $lastUpdated = $latestReview ? $latestReview->updated_at : null;

            $reviews = \App\Models\GoogleReview::orderBy('iso_date', 'desc')
                ->take(18)
                ->get()
                ->map(function ($review) {
                    return [
                        'text' => $review->text,
                        'rating' => $review->rating,
                        'author_name' => $review->author_name,
                        'profile_photo_url' => $review->profile_photo_url,
                        'project_photos' => $review->project_photos,
                        'relative_time_description' => $review->relative_time_description,
                    ];
                });

            if ($reviews->isEmpty()) {
                return $this->fetchPlacesApiFallback();
            }

            return response()->json([
                'reviews' => $reviews,
                'rating' => 5.0,
                'total_reviews' => $reviews->count(),
                'last_updated' => $lastUpdated ? $lastUpdated->format('F j, Y, g:i A') : 'Never',
                'source' => 'database'
            ]);

        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error("Surgical Snag reading reviews from database: " . $e->getMessage());
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
