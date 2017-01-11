<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
	/**
	 * Login page.
	 * 
	 * @return type
	 */
    public function index()
    {
    	return view('guest.login');
    }

    /**
     * Authenticate the user with email/password.
     * 
     * @param LoginRequest $request 
     * @return type
     */
    public function authenticate(LoginRequest $request)
    {
        $input = $request->only(['email', 'password']);

        if (Auth::attempt(['email' => $input['email'], 'password' => $input['password']]))
        {   
            return redirect('/dashboard');
        }
        else
        {
            return redirect( route('auth.login'));
        }
    }

    /**
     * Logout the user.
     * 
     * @return type
     */
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
