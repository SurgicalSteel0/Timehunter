<?php

namespace App\Http\Controllers\Login;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller {

    public function showLogin() {
        return View::make('pages.auth.login');
    }

}
