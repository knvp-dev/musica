@extends('layouts.fullscreen')

@section('content')

<div class="has-gradient-background is-full-height centered-form has-text-centered">

    <a href="/" class="is-white in-top-left-corner"><i class="fa fa-arrow-left small-icon"></i> Go back</a>

    <a href="/" class="logo-text is-white mb-50 mt-50">Bandaid</a>

    <div class="small-form has-dropshadow">

        <form action="{{ route('login') }}" method="post">
            {{ csrf_field() }}
            <div class="form-title">
                Login to your account
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
            </div>


            <div class="field">
                <label for="" class="field-label"></label>
                <p class="control is-expanded">
                    <button class="button is-primary is-fullwidth mb-10">
                        Login
                    </button>
                </p>
                <a class="small-link" href="{{ route('password.request') }}">
                    Forgot Your Password?
                </a>
                <br>
                <hr>
                <a class="small-link" href="{{ route('register') }}">
                    Don't have an account? Create one now!
                </a>
            </div>
        </form>
    </div>

</div>
@endsection
