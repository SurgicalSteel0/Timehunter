<?php

namespace App\Http\Controllers\Registration;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;

class RegistrationController extends Controller {

    /**
     * Registers a user.
     *
     * @return mixed
     */
    public function doRegister() {

        $input = Request::all();
        User::create($input);

        return Redirect::route('loginPage')
            ->with('alert', [
                'type' => 'info',
                'title' => 'Account Created',
                'message' => 'Your account has been created.'
            ]);
    }

}
