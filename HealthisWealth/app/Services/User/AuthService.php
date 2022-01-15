<?php

namespace App\Services\User;

use Illuminate\Http\Request;
use App\Contracts\Dao\User\AuthDaoInterface;
use App\Contracts\Services\User\AuthServiceInterface;

/**
 * Service class for user.
 */
class AuthService implements AuthServiceInterface
{
    /**
     * user dao
     */
    private $authDao;
    public function __construct(AuthDaoInterface $authDaoInterface)
    {
        $this->authDao = $authDaoInterface;
    }
    /*To save user*/
    public function saveUser(Request $request){
        return $this->authDao->saveUser($request);
    }

}
