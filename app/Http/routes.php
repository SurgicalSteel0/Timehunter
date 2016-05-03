<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Login
 *
 */
Route::get('auth/login', [
    'as' => 'loginPage',
    'uses' => 'Login\LoginController@showLogin',
    'middleware' => 'guest'
]);
Route::post('auth/login', [
    'as' => 'login',
    'uses' => 'Login\LoginController@doLogin'
]);

/**
 * Register
 *
 */
Route::post('auth/register', [
    'as' => 'registration',
    'uses' => 'Registration\RegistrationController@doRegister'
]);

/**
 * Logout
 *
 */
Route::get('auth/logout', [
    'as' => 'logoutPage',
    'uses' => 'Logout\LogoutController@doLogout'
]);

/**
 * Home
 *
 */
Route::get('auth/home', [
    'as' => 'homePage',
    'uses' => 'Home\HomeController@showHome',
    'middleware' => ['auth', 'character']
]);

/**
 * Character
 *
 */
Route::get('auth/characters', [
    'as' => 'charactersPage',
    'uses' => 'Character\CharacterController@showCharacters',
    'middleware' => 'auth'
]);
Route::post('auth/characters', [
    'uses' => 'Character\CharacterController@storeCharacter',
    'middleware' => 'auth'
]);
Route::post('auth/characters/create', [
    'as' => 'createCharacter',
    'uses' => 'Character\CharacterController@createCharacter',
    'middleware' => 'auth'
]);
Route::post('auth/characters/play', [
    'uses' => 'Character\CharacterController@playCharacter',
    'middleware' => 'auth'
]);

Route::get('auth/test', function () {

    $characters = Auth::user()->characters()->with('race')->get()->toArray();

    return dd($characters);
});