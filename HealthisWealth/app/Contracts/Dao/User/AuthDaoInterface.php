<?php

namespace App\Contracts\Dao\User;

use Illuminate\Http\Request;

/**
 * Interface for Data Accessing Object of student
 */
interface AuthDaoInterface
{
    public function saveUser(Request $request);
}
