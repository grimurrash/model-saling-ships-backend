<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('video_galleries', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description')->nullable();

            $table->string('type');
            $table->string('preview_image_url');

            $table->string('video_url');

            $table->dateTime('date');

            $table->boolean('is_visible');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('video_galleries');
    }
};
