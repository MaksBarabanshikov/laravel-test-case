<?php

namespace App\Http\Resources;

use App\Models\Article;
use App\Models\State;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;
use JsonSerializable;

class ArticleCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'title' => $this->title,
            'img' => $this->img,
            'preview' => $this->getBodyPreview(),
            'created_at' => $this->createdAtForHumans(),
            'tags' => TagResource::collection($this->whenLoaded('tags')),
            'state' => StateResource::make($this->whenLoaded('state')),
        ];
    }
}
