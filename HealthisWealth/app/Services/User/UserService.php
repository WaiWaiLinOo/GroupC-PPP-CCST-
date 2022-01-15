<?php

namespace App\Services\User;

use App\Contracts\Dao\User\UserDaoInterface;
use App\Contracts\Services\User\UserServiceInterface;

/**
 * Service class for user.
 */
class UserService implements UserServiceInterface
{
    /**
     * user dao
     */
    private $userDao;
    
    public function __construct(UserDaoInterface $userDaoInterface)
    {
        $this->userDao = $userDaoInterface;
    }

}
