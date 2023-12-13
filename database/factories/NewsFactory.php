<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition(): array
    {
        $shortTitle = $this->faker->word();
        return [
            'slug' => $shortTitle,
            'short_title' => $shortTitle,
            'short_description' => $this->faker->text(),
            'title' => $this->faker->word(),
            'description' => $this->faker->text(),
            'preview_image_url' => $this->faker->imageUrl(),
            'video_url' => $this->faker->url(),
            'document_url' => $this->faker->url(),
            'date' => Carbon::now(),
            'is_visible' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
