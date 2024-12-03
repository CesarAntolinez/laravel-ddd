<?php

namespace Domain\User\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @class TypeDocument
 * @package Domain\User\Models
 * @property int $id
 * @property string $name
 * @property string $short_name
 * @property array $category
 */
class TypeDocument extends Model
{
    /** @var string[] */
    protected $fillable = ['name', 'short_name', 'category'];

    /** @return string[] */
    protected function casts(): array
    {
        return [
            'category' => 'array',
        ];
    }
}
