<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;


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
    public function __construct()
    {
        $this->middleware('guest');
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
            'email' => ['required', 'string', 'email:rfc,dns', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */



    // ---------------- wrong method to add the image to user model ------------------
    /*              protected function create(array $data, Request $request)
                        {
                            $user = new User;
                            $user->name = $data['name'];
                            $user->email = $data['email'];
                            $user->password = Hash::make($data['password']);

                            if ($request->hasFile('avatar_choose')) {
                                $avatarName = $data['name'] . '-' . Str::random(10) . '.' . $request->file('image')->extension();
                                $image = $request->file('avatar_choose');
                                $path = $image->storeAs('images/avatars', $avatarName);
                                $user->avatar = $path;
                            } else {
                                $user->avatar = $request->avatar_option;
                            }
                            $user->save();


                        }
}
*/




    // ----------------- correct method to add the image to user model by(chatgbt) ------------------
    // ----------------- never change the create method instead override the register method ------------------
    protected function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        // Handle avatar upload
        if ($request->hasFile('avatar_choose') && $request->file('avatar_choose')->isValid()) {
            $avatarName = $request->name . '-' . Str::random(10) . '.' . $request->file('avatar_choose')->extension();
            $avatarNameNospaces = preg_replace('/\s+/', '', $avatarName);
            $path = $request->file('avatar_choose')->storeAs('/images/avatars', $avatarNameNospaces);
            $user->avatar = '/' . $path;
            $user->save();
        } else {
            $user->avatar = $request->avatar_option;
            $user->save();
        }

        event(new Registered($user));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }


    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
