@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <br>
        <div class="col s12 l6 offset-l3 m8 offset-m2">
            <form class="card" role="form" method="POST" action="{{ url('/login') }}">
                <div class="card-content black-text">
                    <h5 class="{{ Config::get('template.primary-color') }}-text center-align"><i class="large material-icons">person</i></h5>
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="email" value="{{ old('email') }}" id="email" class="validate" autofocus>
                            <label for="email">Email</label>
                        </div>
                    </div>            
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="password" name="password" value="{{ old('password') }}" id="password" class="validate">
                            <label for="password">Password</label>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="input-field col s6" style="margin-top:0; padding-left:0;">
                            <input type="checkbox" name="remember" id="remember">
                            <label for="remember">Remember me</label>
                        </div>
                        <div class="input-field col s6 right-align">
                            <a class="" href="{{ url('/password/reset') }}">Forgot Your Password?</a>   
                        </div>
                    </div>
                </div>
                <div class="card-action right-align">
                    <button class="waves-effect {{ Config::get('template.primary-color') }} waves-light btn">Sign in</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
