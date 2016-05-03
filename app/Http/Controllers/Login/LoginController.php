<?php

namespace App\Http\Controllers\Login;

use App\Http\Requests\LoginUserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller {

    /**
     * Show the login page.
     *
     * @return mixed
     */
    public function showLogin() {
        return View::make('pages.auth.login');
    }

    /**
     * Login a user.
     *
     * @param LoginUserRequest $request
     * @return mixed
     */
    public function doLogin(LoginUserRequest $request) {

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return Redirect::route('charactersPage');
        } else {
            return Redirect::route('loginPage')
                ->with('alert', [
                    'type' => 'danger',
                    'title' => 'Incorrect Credentials',
                    'message' => 'Your email and/or password is incorrect.'
                ]);
        }

    }

}
