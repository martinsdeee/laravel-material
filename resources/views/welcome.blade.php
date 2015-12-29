@extends('layouts.base')

@section('base')
<style>
    .valign-wrapper {
        height:100vh;
    }
</style>
<div class="section no-pad-bot valign-wrapper {{ Config::get('template.primary-color') }}" id="index-banner">
    <div class="container">
        <div class="row">
            <div class="col s12 center-align">
                <h1 class="{{ Config::get('template.primary-color') }}-text text-darken-4 center-align">
                    {{ Config::get('template.product') }}
                </h1>
                <div id="welcome-slider" class="slider">             
                    <ul class="slides transparent">
                        @foreach(Config::get('template.tagline') as $line)
                        <li>
                            <div class="caption center-align">
                                <h5 class="{{ Config::get('template.primary-color') }}-text text-darken-4">
                                    {{ $line }}
                                </h5>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 center-align">
                <a href="/dashboard" class="btn {{ Config::get('template.primary-color') }}">Start here</a>
            </div>
        </div>
    </div> 
</div>
@stop

@section('scripts')
<script>
    (function(){
        $('#welcome-slider').slider({ 
            full_width: true,
            height:108,
            indicators:false
        });
    })();
</script>
@stop
