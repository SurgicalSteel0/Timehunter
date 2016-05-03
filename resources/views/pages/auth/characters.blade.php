@extends('layout.app')

@section('title', 'Timehunter :: Characters')

@section('content')

    <div class="container-fluid container-main">

        @include('layout.nav')

        <div class="panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-user"></span> Your Characters
            </div>
            <div class="panel-body">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Race</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($characters as $character)
                        <tr>
                            <td>{{ $character->name }}</td>
                            <td>{{ $character->race }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div class="panel-footer">Panel Footer</div>
        </div>

    </div>

@endsection