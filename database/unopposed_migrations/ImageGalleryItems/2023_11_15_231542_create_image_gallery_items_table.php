<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('image_gallery_items', function (Blueprint $table) {
            $table->id();

            $table->string('image_url');

            $table->foreignId('image_gallery_id')->references('id')->on('image_galleries');

            $table->boolean('is_visible');

            $table->integer('order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('image_gallery_items');
    }
};
