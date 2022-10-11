<?php

namespace Sqits\Babelfish\Models;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $guarded = ['id'];

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
