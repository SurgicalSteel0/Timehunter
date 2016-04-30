<?php

namespace App\Http\Controllers\Registration;

use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Support\Facades\Redirect;

/**
 * Class RegistrationController
 * @package App\Http\Controllers\Registration
 */
class RegistrationController extends Controller {

    /**
     * Registers a user.
     *
     * @param RegisterUserRequest $request
     * @return mixed
     */
    public function doRegister(RegisterUserRequest $request) {

        User::create($request->all());

        return Redirect::route('loginPage')
            ->with('alert', [
                'type' => 'info',
                'title' => 'Account Created',
                'message' => 'Your account has been created.'
            ]);
    }

}
