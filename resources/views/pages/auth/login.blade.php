@extends('layout.app')

@section('title', 'Timehunter :: Login')

@section('content')

    <div class="login-container">

        @include('layout.alerts')

        <div class="login-box panel panel-default">
            <div class="panel-heading">
                <span class="glyphicon glyphicon-log-in"></span> Login
                <div class="btn-group pull-right">
                    <button type="button" data-toggle="modal" data-target="#registrationModal" class="btn btn-default btn-xs">
                        <span class="glyphicon glyphicon-plus-sign"></span> Register
                    </button>
                </div>
            </div>
            <div class="panel-body">
                <form role="form" method="post" action="{{ route('login') }}" id="loginForm">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="loginEmail">Email:</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="emailAddon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                            <input id="loginEmail" name="email" type="email" class="form-control" placeholder="Email" aria-describedby="emailAddon">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password:</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="passwordAddon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </span>
                            <input id="loginPassword" name="password" type="password" class="form-control" placeholder="Password" aria-describedby="passwordAddon">
                        </div>
                    </div>
                    <button id="loginBtn" type="submit" class="btn btn-default btn-block">
                        <span class="glyphicon glyphicon-log-in"></span> Login
                    </button>
                </form>
            </div>
            <div class="panel-footer text-muted text-center text-x-small">
                <div>&copy; {{ date('Y') }} Timehunter</div>
            </div>
        </div>
    </div>

    <!-- Registration Modal -->
    <div id="registrationModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <form role="form" method="post" action="{{ route('registration') }}" id="registrationForm">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Register</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="registerFirstName">First Name:</label>
                            <div class="input-group">
                            <span class="input-group-addon" id="firstNameAddon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                                <input id="registerFirstName" name="first_name" type="text" class="form-control" placeholder="First Name" aria-describedby="firstNameAddon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="registerLastName">Last Name:</label>
                            <div class="input-group">
                            <span class="input-group-addon" id="lastNameAddon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                                <input id="registerLastName" name="last_name" type="text" class="form-control" placeholder="Last Name" aria-describedby="lastNameAddon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="registerEmail">Email:</label>
                            <div class="input-group">
                            <span class="input-group-addon" id="registerEmailAddon">
                                <span class="glyphicon glyphicon-user"></span>
                            </span>
                                <input id="registerEmail" name="email" type="text" class="form-control" placeholder="Email" aria-describedby="registerEmailAddon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="registerPassword">Password:</label>
                            <div class="input-group">
                            <span class="input-group-addon" id="registerPasswordAddon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </span>
                                <input id="registerPassword" name="password" type="password" class="form-control" placeholder="Password" aria-describedby="registerPasswordAddon">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="registerConfirmPassword">Confirm Password:</label>
                            <div class="input-group">
                            <span class="input-group-addon" id="registerConfirmPasswordAddon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </span>
                                <input id="registerConfirmPassword" name="password_confirmation" type="password" class="form-control" placeholder="Confirm Password"
                                       aria-describedby="registerConfirmPasswordAddon">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-plus-sign"></span> Register
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection