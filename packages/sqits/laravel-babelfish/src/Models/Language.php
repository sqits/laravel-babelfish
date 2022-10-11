<?php

namespace Sqits\Babelfish\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Language extends Model
{
    /**
     * Get translations of the language.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function translations() : HasMany
    {
        return $this->hasMany(Translation::class)
            ->orderBy('key');
    }
}
