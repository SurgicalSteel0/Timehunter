<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class HomeController extends Controller {

    /**
     * Show the home page.
     *
     * @return mixed
     */
    public function showHome() {
        return View::make('pages.auth.home');
    }

}
