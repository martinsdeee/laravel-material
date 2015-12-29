@extends('layouts.app')

<!-- Main Content -->
@section('content')
<div class="container">
    <div class="row">
        <br>
        <div class="col s12 l6 offset-l3 m8 offset-m2">
            <form class="card" role="form" method="POST" action="{{ url('/password/email') }}">
                <div class="card-content black-text">
                    <h5 class="{{ Config::get('template.primary-color') }}-text center-align"><i class="large material-icons">email</i></h5>
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="input-field col s12">
                            <input type="text" name="email" value="{{ old('email') }}" id="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                </div>
                <div class="card-action right-align">
                    <button class="waves-effect {{ Config::get('template.primary-color') }} waves-light btn">Send Password Reset Link</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
