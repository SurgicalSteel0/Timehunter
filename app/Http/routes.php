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

Route::get('auth/login', [
    'as' => 'loginPage',
    'uses' => 'Login\LoginController@showLogin',
    'middleware' => 'guest'
]);

Route::post('auth/login', [
    'as' => 'login',
    'uses' => 'Login\LoginController@doLogin'
]);

Route::post('auth/register', [
    'as' => 'registration',
    'uses' => 'Registration\RegistrationController@doRegister'
]);

Route::get('auth/logout', [
    'as' => 'logoutPage',
    'uses' => 'Logout\LogoutController@doLogout'
]);

Route::get('auth/home', [
    'as' => 'homePage',
    'uses' => 'Home\HomeController@showHome',
    'middleware' => 'auth'
]);

Route::get('auth/characters', [
    'as' => 'charactersPage',
    'uses' => 'Character\CharacterController@showCharacters',
    'middleware' => 'auth'
]);

Route::post('auth/characters', [
    'uses' => 'Character\CharacterController@storeCharacter',
    'middleware' => 'auth'
]);

Route::get('auth/characters/create', [
    'uses' => 'Character\CharacterController@createCharacter',
    'middleware' => 'auth'
]);
