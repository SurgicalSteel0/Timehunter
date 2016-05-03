@extends('layout.app')

@section('title', 'Timehunter :: Home')

@section('content')

    <div class="container-fluid">

        <h1>Home Page</h1>
        <p>Should only be displayed if logged in with a character.</p>
        <p>Character Id: {{ Session::get('character_id') }}</p>

    </div>

@endsection