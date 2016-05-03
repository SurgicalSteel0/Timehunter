<?php

namespace App\Http\Controllers\Character;

use App\Race;
use App\Character;
use App\Http\Requests\CreateCharacterRequest;
use App\Http\Requests\PlayCharacterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class CharacterController extends Controller {

    /**
     * Show the user's available characters.
     *
     * @return mixed
     */
    public function showCharacters() {

        $characters = Auth::user()->characters()->with('race')->get();

        return View::make('pages.auth.characters')
            ->with('characters', $characters)
            ->with('races', Race::all());
    }

    /**
     * Creates a new character.
     *
     * @param CreateCharacterRequest $request
     * @return mixed
     */
    public function createCharacter(CreateCharacterRequest $request) {

        $character = $request->all();
        $character['user_id'] = Auth::id();

        Character::create($character);

        return Redirect::route('charactersPage')
            ->with('alert', [
                'type' => 'success',
                'title' => 'Character Created',
                'message' => 'Your character has been successfully created.'
            ]);
    }

    /**
     * Registers a character in the session.
     *
     * @param PlayCharacterRequest $request
     * @return mixed
     */
    public function playCharacter(PlayCharacterRequest $request) {
        Session::put('character_id', $request->character_id);
        return Redirect::route('homePage');
    }


}
