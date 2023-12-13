<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('committee_members', function (Blueprint $table) {
            $table->id();

            $table->string('full_name');
            $table->string('image_url');
            $table->string('category')->nullable();
            $table->string('present_from')->nullable();
            $table->string('description')->nullable();

            $table->foreignId('committee_id')->references('id')->on('committees');

            $table->boolean('is_visible');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('committee_members');
    }
};
