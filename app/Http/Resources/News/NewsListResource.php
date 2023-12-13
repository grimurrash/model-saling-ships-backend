<?php

namespace App\Http\Resources\News;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\LengthAwarePaginator;

/** @property LengthAwarePaginator $resource */
class NewsListResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'items' => NewsListItemResource::collection($this->resource->items()),
            'meta' => [
                'current_page' => $this->resource->currentPage(),
                'per_page' => $this->resource->perPage(),
                'last_page' => $this->resource->lastPage(),
                'total' => $this->resource->total(),
                'from_item' => $this->resource->firstItem(),
                'to_item' => $this->resource->lastItem(),
            ]
        ];
    }
}
