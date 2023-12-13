<?php

namespace App\Http\Resources\News;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin News */
class NewsInfoResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'slug' => $this->slug,
            'short_title' => $this->short_title,
            'short_description' => $this->short_description,
            'title' => $this->title,
            'description' => $this->description,
            'preview_image_url' => $this->preview_image_url,
            'video_url' => $this->video_url,
            'document_url' => $this->document_url,
            'date' => $this->date->toDateTimeString(),
            'is_visible' => $this->is_visible,
        ];
    }
}
