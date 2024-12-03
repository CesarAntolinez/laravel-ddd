<?php

namespace Domain\User\QueryBuilders;

use Illuminate\Database\Eloquent\Builder;

class ProfileQueryBuilder extends Builder
{

    /** @return string */
    public function getPhotoUrlAttribute(): string
    {
        return storage_public($this->photo, '');
    }
}
