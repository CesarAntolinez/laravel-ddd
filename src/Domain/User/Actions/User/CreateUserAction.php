<?php

namespace Domain\User\Actions\User;

use Domain\User\DataTransferObjects\UserData;
use Domain\User\Models\User;

class CreateUserAction
{
    /**
     * @param UserData $userData
     * @return void
     */
    public function __construct(
        protected UserData $userData
    )
    {
    }

    /** @return User */
    public function execute(): User
    {
        return User::create($this->userData->toArray());
    }

}
