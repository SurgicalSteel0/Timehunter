<?php

namespace App\Http\Controllers\Logout;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller {

    /**
     * Logout the user.
     *
     */
    public function doLogout() {

        Auth::logout();
        Session::flush();

        return Redirect::route('loginPage')
            ->with('alert', [
                'type' => 'info',
                'title' => 'Logged Out',
                'message' => 'You have successfully logged out.'
            ]);
    }

}
