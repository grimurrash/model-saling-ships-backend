<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();

            $table->string('slug')->unique();

            $table->string('short_title');
            $table->string('short_description');

            $table->string('title');
            $table->text('description');

            $table->string('preview_image_url');

            $table->string('video_url')->nullable();
            $table->string('document_url')->nullable();

            $table->dateTime('date');

            $table->boolean('is_visible');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
