<?php

namespace App\Http\Resources\News;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin News */
class NewsListItemResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'short_title' => $this->short_title,
            'short_description' => $this->short_description,
            'preview_image_url' => $this->preview_image_url,
            'date' => $this->date->toDateTimeString(),
        ];
    }
}
