<?php

namespace App\Contracts\Dao\User;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of student
 */
interface AuthDaoInterface
{
    /* To save user*/
    public function saveUser(Request $request);
}
