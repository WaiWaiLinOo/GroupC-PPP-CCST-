<?php

namespace App\Contracts\Services\User;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of student
 */
interface AuthServiceInterface

{
    /*To save user*/
    public function saveUser(Request $request);
}
