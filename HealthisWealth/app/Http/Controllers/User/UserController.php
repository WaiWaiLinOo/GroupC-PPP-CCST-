<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Contracts\Services\User\UserServiceInterface;

class UserController extends Controller
{
    /**
     * task interface
    */
    private $userInterface;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserServiceInterface $userServiceInterface)
    {
        $this->userInterface = $userServiceInterface;
    }
}
