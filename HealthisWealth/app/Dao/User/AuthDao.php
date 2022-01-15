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
        //if($request->file('profile')){
        //    $fileName = time().'_'.$request->profile->getClientOriginalName();
        //    $filePath = $request->file('profile')->storeAs('userProfile',$fileName,'public');
        //    $path = '/storage/'.$filePath;
        //}
        //if($request->file('certificate')){
        //    $fileName = time().'_'.$request->certificate->getClientOriginalName();
        //    $filePath = $request->file('certificate')->storeAs('userCertificate',$fileName,'public');
        //    $certipath = '/storage/'.$filePath;
        //}
        //else{
        //    $certipath = '';
        //}
        //return User::create([
        //    'name' => $request->name,
        //    'email' => $request->email,
        //    'password' => $request->password,
        //    'profile'  => $path,
        //    'certificate' =>$certipath,
        //    'dob'   =>$request->dob,
        //    'address' => $request->address
        //]);
        dd($request->file('profile'));

    }

}
