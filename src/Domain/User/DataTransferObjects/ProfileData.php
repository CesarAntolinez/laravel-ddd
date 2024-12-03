<?php

namespace Domain\User\DataTransferObjects;

use Illuminate\Http\Request;
use Spatie\LaravelData\Data;
// use Spatie\LaravelData\Attributes\Validation\Rule;

/**
 * @class ProfileData
 * @package Domain\User\DataTransferObjects
 * @property string $name
 * @property int $user_id
 * @property string|null $surname
 * @property string|null $birthdate
 * @property int|null $type_document_id
 * @property string|null $document
 */
class ProfileData extends Data
{
    /**
     * @param string $name
     * @param int $user_id
     * @param string|null $surname
     * @param string|null $birthdate
     * @param int|null $type_document_id
     * @param string|null $document
     */
    public function __construct(
        public string $name,
        public int $user_id,
        public ?string $surname = null,
        public ?string $birthdate = null,
        public ?int $type_document_id = null,
        public ?string $document = null,
    ) {}

    /**
     * @param Request $request
     * @return ProfileData
     */
    public static function fromRequest(Request $request): ProfileData
    {
        return new self(
            name: $request->input('name'),
            user_id: $request->input('user_id'),
            surname: $request->input('surname'),
            birthdate: $request->input('birthdate'),
            type_document_id: $request->input('type_document_id'),
            document: $request->input('document')
        );
    }
}
