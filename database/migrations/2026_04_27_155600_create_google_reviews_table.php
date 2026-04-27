<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('google_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('author_name');
            $table->integer('rating');
            $table->text('text')->nullable();
            $table->string('profile_photo_url')->nullable();
            $table->string('relative_time_description')->nullable();
            $table->json('project_photos')->nullable();
            $table->dateTime('iso_date')->nullable();
            $table->string('review_id')->unique()->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('google_reviews');
    }
};
