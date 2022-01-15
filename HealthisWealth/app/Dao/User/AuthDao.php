<?php

namespace App\Dao\User;
use App\Models\User\User;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Hash;
use App\Contracts\Dao\User\AuthDaoInterface;

/**
 * Data Access Object for User
 */
class AuthDao implements AuthDaoInterface
{
    public function saveUser(Request $request)
    {
        if ($profile = $request->file('profile')) {
            $name = time().'_'.$request->file('profile')->getClientOriginalName();
            $request->file('profile')->store('public/images');
            $user['profile'] = "$name";
        }
        if ($certificate = $request->file('certificate')) {
            $certificate = time().'_'.$request->file('certificate')->getClientOriginalName();
            $request->file('profile')->store('public/images');
            $user['certificate'] = "$certificate";
        }
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request['password']),
            'profile' => $name,
            'certificate'=>$certificate,
            'dob' =>$request->dob,
            'address'=>$request->address
        ]);

    }

}

