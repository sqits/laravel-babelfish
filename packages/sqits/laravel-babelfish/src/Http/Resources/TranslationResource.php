<?php

namespace Sqits\Babelfish\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TranslationResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'key' => $this->key,
            'fallback' => $this->fallback ?? null,
            'value' => $this->value,
            'suggestions' => $this->suggestions,
        ];
    }
}
