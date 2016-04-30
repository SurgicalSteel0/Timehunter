<?php

namespace App\Http\Controllers\Logout;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LogoutController extends Controller {

    /**
     * Logout the user.
     *
     */
    public function doLogout() {
        Auth::logout();
        return Redirect::route('loginPage');
    }

}
