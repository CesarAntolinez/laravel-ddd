<?php

namespace Domain\User\DataTransferObjects;

use Illuminate\Http\Request;
use Spatie\LaravelData\Data;
// use Spatie\LaravelData\Attributes\Validation\Rule;

/**
 * @class UserData
 * @package Domain\User
 * @property string $nickname
 * @property string $email
 * @property string $password
 */
class UserData extends Data
{

    /**
     * @param string $nickname
     * @param string $email
     * @param string $password
     */
    public function __construct(
        protected string $nickname,
        protected string $email,
        protected string $password
    )
    {}

    /**
     * @param Request $request
     * @return self
     */
    public static function fromRequest(
        Request $request
    ): self
    {
        return new self(
            nickname: $request->input('nickname'),
            email: $request->input('email'),
            password: $request->input('password')
        );
    }
}
