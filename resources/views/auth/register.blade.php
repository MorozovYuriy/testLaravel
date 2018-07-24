@extends('layouts.auth_app')

@section('content')
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="name">First name</label>
                            <input class="form-control" id="name" type="text" name="name" aria-describedby="nameHelp" placeholder="Enter first name">
                            @if ($errors->has('name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="lastname">Last name</label>
                            <input class="form-control" id="lastname" type="text" name="lastname" aria-describedby="nameHelp" placeholder="Enter last name">
                            @if ($errors->has('lastname'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input class="form-control" id="email" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <label for="password">Password</label>
                            <input class="form-control" id="password" type="password" name="password" placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label for="password-confirm">Confirm password</label>
                            <input class="form-control" id="password-confirm" type="password" name="password_confirmation" placeholder="Confirm password">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="{{ route('login') }}">Login Page</a>
                <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
        </div>
    </div>
@endsection
