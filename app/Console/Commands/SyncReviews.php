<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\File;

class SyncReviews extends Command
{
    protected $signature = 'reviews:sync';
    protected $description = 'Surgical-ly sync up to 100 Google Reviews via SerpAPI, filtered for 10 months and capped at 18.';

    public function handle()
    {
        $apiKey = env('SERP_API_KEY');
        $dataId = env('GOOGLE_MAPS_DATA_ID');

        if (!$apiKey || !$dataId) {
            $this->error('Surgical Snag: Missing SERP_API_KEY or GOOGLE_MAPS_DATA_ID in .env');
            return 1;
        }

        $this->info('🛰️ Initiating Freshness Sync for aXiYZ 3D Studios...');

        $allProcessedReviews = [];
        $nextPageToken = null;
        $maxToProcess = 100;
        $maxToStore = 18;
        $requestCount = 0;
        $maxRequests = 5; // Safety Brake: Never exceed 5 requests per run

        do {
            $requestCount++;
            $this->comment("🛰️ Parsing Batch #{$requestCount}...");

            $params = [
                'engine' => 'google_maps_reviews',
                'data_id' => $dataId,
                'api_key' => $apiKey,
                'hl' => 'en',
                'sort_by' => 'newest',
            ];

            if ($nextPageToken) {
                $params['next_page_token'] = $nextPageToken;
            }

            $response = Http::get('https://serpapi.com/search', $params);

            if (!$response->successful()) {
                $this->error('❌ Handshake Failed: ' . $response->body());
                break;
            }

            $data = $response->json();
            $batch = $data['reviews'] ?? [];
            
            foreach ($batch as $review) {
                if ($this->isWithinLast10Months($review)) {
                    $allProcessedReviews[] = $review;
                }

                if (count($allProcessedReviews) >= $maxToProcess) break 2;
            }

            $nextPageToken = $data['serpapi_pagination']['next_page_token'] ?? null;

        } while ($nextPageToken && count($allProcessedReviews) < $maxToProcess && $requestCount < $maxRequests);

        if ($requestCount >= $maxRequests) {
            $this->warn("⚠️ Request Cap Reached ({$maxRequests}). Stopping to preserve your SerpAPI credits.");
        }

        // Sort by newest definitively (SerpAPI usually handles this but we'll ensure)
        usort($allProcessedReviews, function($a, $b) {
            return ($b['iso_date'] ?? '') <=> ($a['iso_date'] ?? '');
        });

        // Surgical Cap: Max 18 reviews
        $finalReviews = array_slice($allProcessedReviews, 0, $maxToStore);

        $storagePath = database_path('data');
        if (!File::exists($storagePath)) {
            File::makeDirectory($storagePath, 0755, true);
        }

        $filePath = $storagePath . '/reviews.json';
        File::put($filePath, json_encode($finalReviews, JSON_PRETTY_PRINT));

        $count = count($finalReviews);
        $this->info("✅ Success! Surgical-ly synced {$count} fresh reviews (capped at 18) to the local repository.");
        return 0;
    }

    /**
     * Surgical-ly verify if a review is within the 10-month window.
     */
    private function isWithinLast10Months($review)
    {
        $dateString = strtolower($review['date'] ?? '');
        
        if (str_contains($dateString, 'year')) {
            return false;
        }

        if (preg_match('/(\d+)\s+month/', $dateString, $matches)) {
            return (int)$matches[1] <= 10;
        }

        // Days, weeks, hours, minutes are all fresh
        return true;
    }
}
