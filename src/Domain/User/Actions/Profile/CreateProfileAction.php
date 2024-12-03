<?php

namespace Domain\User\Actions\Profile;

use Domain\User\DataTransferObjects\ProfileData;
use Domain\User\Models\Profile;

class CreateProfileAction
{
    /**
     * @param ProfileData $profileData
     * @return void
     */
    public function __construct(
        protected  ProfileData $profileData
    )
    {
    }

    /** @return Profile */
    public function execute(): Profile
    {
        return Profile::create($this->profileData->toArray());
    }
}
