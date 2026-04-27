<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoogleReview extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name',
        'rating',
        'text',
        'profile_photo_url',
        'relative_time_description',
        'project_photos',
        'iso_date',
        'review_id',
    ];

    protected $casts = [
        'project_photos' => 'array',
        'rating' => 'integer',
    ];
}
