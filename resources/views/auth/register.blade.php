@extends('layouts.fullscreen')

@section('content')
    <div class="has-gradient-background is-full-height centered-form has-text-centered">

        <a href="/" class="is-white in-top-left-corner"><i class="fa fa-arrow-left small-icon"></i> Go back</a>

        <a href="/" class="logo-text is-white mb-50 mt-50">Bandaid</a>

        <div class="small-form has-dropshadow">

            <form action="{{ route('register') }}" method="post">
                {{ csrf_field() }}
                <div class="form-title">
                    Create an account
                </div>
                <div class="field">
                    <p class="control">
                        <input class="input" type="text" name="first_name" placeholder="First name" value="{{ old('first_name') }}">
                    </p>
                    <p class="help is-danger">{{ $errors->first('first_name') }}</p>
                </div>
                <div class="field">
                    <p class="control">
                        <input class="input" type="text" name="last_name" placeholder="Last name" value="{{ old('last_name') }}">
                    </p>
                    <p class="help is-danger">{{ $errors->first('last_name') }}</p>
                </div>
                <div class="field">
                    <p class="control">
                        <input class="input" type="text" name="username" placeholder="Username" value="{{ old('username') }}">
                    </p>
                    <p class="help is-danger">{{ $errors->first('username') }}</p>
                </div>
                <div class="field">
                    <p class="control">
                        <input class="input" type="email" name="email" placeholder="Email address" value="{{ old('email') }}">
                    </p>
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                </div>
                <div class="field">
                    <p class="control">
                        <input class="input" type="password" name="password" placeholder="Password">
                    </p>
                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                </div>
                <div class="field">
                    <p class="control">
                        <input class="input" type="password" name="password_confirmation" placeholder="Password confirmation">
                    </p>
                </div>


                <div class="field">
                    <label for="" class="field-label"></label>
                    <p class="control is-expanded">
                        <button class="button is-primary is-fullwidth mb-10">
                            Register
                        </button>
                    </p>
                    <a class="small-link" href="{{ route('login') }}">
                    Already have an account?
                </a>
                </div>
            </form>
        </div>
    </div>


@endsection
