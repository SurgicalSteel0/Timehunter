@extends('layout.app')

@section('title', 'Timehunter :: Characters')

@section('content')

    @include('layout.nav')

    <div class="container-fluid container-main">

        @include('layout.alerts')

        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-user"></span> Your Characters
                <div class="btn-group pull-right">
                    <button type="button" data-toggle="modal" data-target="#createCharacterModal" class="btn btn-default btn-xs">
                        <span class="glyphicon glyphicon-plus-sign"></span> New Character
                    </button>
                </div>
            </div>
            <div class="panel-body">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Level</th>
                        <th>Name</th>
                        <th>Race</th>
                        <th style="width: 60px;"><!-- Play --></th>
                        <th style="width: 60px;"><!-- Delete --></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($characters as $character)
                        <tr>
                            <td>{{ $character->level }}</td>
                            <td>{{ $character->name }}</td>
                            <td>{{ $character->race->name }}</td>
                            <td class="text-center">
                                <form role="form" method="post" action="characters/play">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $character->id }}" name="character_id"/>
                                    <button type="submit" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-play-circle"></span> Play
                                    </button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form role="form" method="post" action="characters/delete">
                                    {{ csrf_field() }}
                                    <input type="hidden" value="{{ $character->id }}" name="character_id"/>
                                    <button type="submit" class="btn btn-danger btn-xs">
                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div class="panel-footer">Panel Footer</div>
        </div>

    </div>

    <!-- New Character Modal -->
    <div id="createCharacterModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <form role="form" method="post" action="{{ route('createCharacter') }}" id="newCharacterForm">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">New Character</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="characterName">Character Name:</label>
                            <div class="input-group">
                                <span class="input-group-addon" id="characterNameAddon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input id="characterName" name="name" type="text" class="form-control" placeholder="Character Name" aria-describedby="characterNameAddon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="characterRace">Character Race:</label>
                            <select name="race_id" class="form-control" id="characterRace">
                                @foreach($races as $race)
                                    <option value="{{ $race->id }}">{{ $race->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-plus-sign"></span> Create
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection