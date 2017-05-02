@extends('layouts.app')

@section('content')

<div class="has-gradient-background is-full-height centered-form has-text-centered">

    <a href="/" class="is-white in-top-left-corner"><i class="fa fa-arrow-left small-icon"></i> Go back</a>

    <a href="/" class="logo-text is-white mb-50 mt-50">Bandaid</a>

    <div class="small-form has-dropshadow">

        <form action="{{ route('password.request') }}" method="post">
            {{ csrf_field() }}
            <div class="form-title">
                Reset password
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
                    <button class="button is-primary is-fullwidth mb-10">
                        Reset
                    </button>
                </p>
            </div>
        </form>
    </div>

</div>
@endsection
