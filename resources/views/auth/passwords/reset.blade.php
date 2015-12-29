@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <br>
        <div class="col s12 l6 offset-l3 m8 offset-m2">
            <form class="card" role="form" method="POST" action="{{ url('/password/reset') }}">
                <div class="card-content black-text">
                    <h5 class="{{ Config::get('template.primary-color') }}-text center-align"><i class="large material-icons">refresh</i></h5>
                    {!! csrf_field() !!}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="email" value="{{ old('email') }}" id="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="password" name="password" value="" id="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="password" name="password_confirmation" value="" id="password_confirmation" class="validate">
                            <label for="password_confirmation">Password confirmation</label>
                        </div>
                    </div>
                </div>
                <div class="card-action right-align">
                    <button class="waves-effect {{ Config::get('template.primary-color') }} waves-light btn">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
