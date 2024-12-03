<?php

namespace Domain\User\Models;

use Illuminate\Database\Eloquent\{Model, Relations\BelongsTo, SoftDeletes};

/**
 * @class Profile
 * @package Domain\User\Models
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $document
 * @property \Carbon\Carbon $birthdate
 * @property int $type_document_id
 * @property int $user_id
 * @property-read TypeDocument $typeDocument
 * @property-read User $user
 *
 */
class Profile extends Model
{
    use SoftDeletes;

    /** @var string[] */
    protected $fillable = [
        'name',
        'surname',
        'document',
        'birthdate',
        'type_document_id',
        'user_id',
    ];

    /** @return BelongsTo */
    public function typeDocument(): BelongsTo
    {
        return $this->belongsTo(TypeDocument::class);
    }

    /** @return BelongsTo */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /** @return string[] */
    protected function casts(): array
    {
        return [
            'birthdate' => 'date',
        ];
    }
}
