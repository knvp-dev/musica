@extends('layouts.app')

@section('content')

<div class="has-gradient-background is-full-height centered-form has-text-centered">

    <a href="/" class="is-white in-top-left-corner"><i class="fa fa-arrow-left small-icon"></i> Go back</a>

    <a href="/" class="logo-text is-white mb-50 mt-50">Bandaid</a>



    <div class="small-form has-dropshadow">

        @if (session('status'))
        <article class="message is-success">
            <div class="message-body">
                {{ session('status') }}
            </div>
            
        </article>
        <hr>
        @endif

        <form action="{{ url('/password/reset') }}" role="form" method="post">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-title">
                Reset password
            </div>

            <div class="field">
                <p class="control">
                    <input class="input" type="email" name="email" placeholder="Email address">
                </p>
                <p class="help is-danger">{{ $errors->first('email') }}</p>
            </div>
            
            <div class="field">
                <p class="control">
                    <input class="input" type="password" name="password" placeholder="New password">
                </p>
                <p class="help is-danger">{{ $errors->first('password') }}</p>
            </div>

            <div class="field">
                <p class="control">
                    <input class="input" type="password" name="password_confirmation" placeholder="New password confirmation">
                </p>
                <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
            </div>


            <div class="field">
                <label for="" class="field-label"></label>
                <p class="control is-expanded">
                    <button type="submit" class="button is-primary is-fullwidth mb-10">
                        Reset
                    </button>
                </p>
            </div>
        </form>
    </div>

</div>
@endsection
