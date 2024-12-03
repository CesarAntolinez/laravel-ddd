<?php

namespace Domain\User\DataTransferObjects;

use Illuminate\Http\Request;
use Spatie\LaravelData\Data;
// use Spatie\LaravelData\Attributes\Validation\Rule;

/**
 * @class Role
 * @package Domain\User\DataTransferObjects
 * @property string $name
 * @property string $guard_name
 */
class RoleData extends Data
{
    /**
     * @param string $name
     * @param string $guard_name
     */
    public function __construct(
        public string $name,
        public string $guard_name
    ) {}

    /**
     * @param Request $request
     * @return self
     */
    public static function fromRequest(Request $request): self
    {
        return new self(
            name: $request->input('name'),
            guard_name: $request->input('guard_name')
        );
    }
}
