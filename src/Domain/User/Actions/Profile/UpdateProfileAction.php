<?php

namespace Domain\User\Actions\Profile;

use Domain\User\DataTransferObjects\ProfileData;
use Domain\User\Models\Profile;

class UpdateProfileAction
{
    /**
     * @param Profile $profile
     * @param ProfileData $profileData
     * @return void
     */
    public function __construct(
        protected Profile     $profile,
        protected ProfileData $profileData
    )
    {
    }

    /**
     * @return Profile
     */
    public function execute(): Profile
    {
        $this->profile->update($this->profileData->toArray());
        return $this->profile;
    }
}
