@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m10 offset-m1">
            <div class="card">
                <div class="card-content">
                    <h4 class="{{ Config::get('template.primary-color') }}-text darken-2">
                        Dashboard
                    </h4>
                    <p>
                        You are logged in!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
