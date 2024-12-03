<?php

namespace Domain\User\Actions\User;

use Domain\User\DataTransferObjects\UserData;
use Domain\User\Models\User;

class UpdateUserAction
{
    /**
     * @param User $user
     * @param UserData $userData
     * @return void
     */
    public function __construct(
        protected User $user,
        protected UserData $userData
    )
    {
    }

    /** @return User  */
    public function execute(): User
    {
        $this->user->update($this->userData->toArray());
        return $this->user;
    }
}
