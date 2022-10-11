<?php

namespace Sqits\Babelfish\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TranslationResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'key' => $this->key,
            'fallback' => '',
            'value' => $this->value,
            'suggestions' => $this->suggestions,
        ];
    }
}
