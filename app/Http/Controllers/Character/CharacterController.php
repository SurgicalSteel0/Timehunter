<?php

namespace App\Http\Controllers\Character;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CharacterController extends Controller {

    /**
     * Show the user's available characters.
     *
     * @return mixed
     */
    public function showCharacters() {

        $characters = Auth::user()->with('characters', 'races')->get();

        return View::make('pages.auth.characters', [
            'characters' => $characters
        ]);
    }


    public function createCharacter() {

    }


}
