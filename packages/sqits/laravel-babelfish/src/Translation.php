<?php

namespace Sqits\Babelfish;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    /**
     * Get language of the translation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
