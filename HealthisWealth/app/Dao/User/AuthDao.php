<?php

namespace App\Dao\User;



use App\Models\User\User;
use Illuminate\Http\Request;
use App\Contracts\Dao\User\AuthDaoInterface;

/**
 * Data Access Object for User
 */
class AuthDao implements AuthDaoInterface
{
    public function saveUser(Request $request)
    {
        $user = $request->all();
        if ($profile = $request->file('profile')) {
            //$destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $profile->getClientOriginalExtension();
            //$profile->move(public_path('userProfile'),$profileImage);
            $profile->move('public/userProfile/', $profileImage);
            $user['profile'] = "$profileImage";
        }
        if ($certificate = $request->file('certificate')) {
            //$destinationPath = 'image/';

            $certificateImage = date('YmdHis') . "." . $profile->getClientOriginalExtension();
            $certificate->move(public_path('userCertificate'),$certificateImage);
            $user['certificate'] = "$certificateImage";
        }
        User::create($user);

    }

}

