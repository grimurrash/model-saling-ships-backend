<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetNewsListRequest;
use App\Http\Resources\News\NewsInfoResource;
use App\Http\Resources\News\NewsListResource;
use App\Models\News;
use Illuminate\Http\JsonResponse;

class NewsController extends Controller
{
    public function index(GetNewsListRequest $request): JsonResponse
    {
        $news = News::query()
            ->orderBy('date', 'desc')
            ->visible()
            ->paginate(
                perPage: $request->get('per_page', 5),
                page: $request->get('page', 1)
            );
        return response()->json(NewsListResource::make($news));
    }

    public function show(string $slug): JsonResponse
    {
        $news = News::query()
            ->where('slug', $slug)
            ->visible()
            ->first();

        return response()->json(NewsInfoResource::make($news));
    }
}
