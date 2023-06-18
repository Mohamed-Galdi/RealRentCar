<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dashboard'; // Adjust the admin dashboard route as per your project's setup

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.adminLogin'); // Adjust the admin login view file name as per your project's setup
    }

    // protected function guard()
    // {
    //     return Auth::guard('admin'); // Adjust the admin guard name as per your project's setup
    // }

    protected function credentials(Request $request)
    {
        return array_merge($request->only($this->username(), 'password'), ['role' => 'admin']);
    }

    public function username()
    {
        return 'email'; // Adjust the admin login field (e.g., email, username) as per your project's setup
    }
}
