<?php

namespace App\Http\Controllers\Auth;


use App\Models\User\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Contracts\Services\User\AuthServiceInterface;
use App\Contracts\Services\User\UserServiceInterface;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $authInterface;
    public function __construct(AuthServiceInterface $authServiceInterface)
    {
        $this->middleware('guest');
        $this->authInterface = $authServiceInterface;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'profile'=>"required|mimes:jpeg,bmp,png",
            'dob'=>['required'],
            'address' =>['required','string','min:20'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        dd($request);
        //$this->authInterface->saveUser($request);
        //return view('Frontend_ui.dashboard');
        dd($request->file('profile'));
        if($request->file('profile')){
            $fileName = time().'_'.$request->profile->getClientOriginalName();
            $filePath = $request->file('profile')->storeAs('userProfile',$fileName,'public');
            $path = '/storage/'.$filePath;
        }

        if($request->file('certificate')){
            $fileName = time().'_'.$request->certificate->getClientOriginalName();
            $filePath = $request->file('certificate')->storeAs('userCertificate',$fileName,'public');
            $certipath = '/storage/'.$filePath;
        }
        else{
            $certipath = '';
        }
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->name;
        $user->password = $request->name;
        $user->profile = $path;
        $user->certificate = $certipath;
        $user->dob = $request->dob;
        $user->address = $request->address;
        $user->save();

    }

    protected function registerView(){
        return view('Frontend_ui.register');
    }


}
