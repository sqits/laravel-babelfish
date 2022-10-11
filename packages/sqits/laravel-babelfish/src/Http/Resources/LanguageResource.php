<?php

namespace Sqits\Babelfish\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LanguageResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'code' => $this->code,
            'translations' => $this->whenLoaded('translations', TranslationResource::collection($this->translations))
        ];
    }
}
