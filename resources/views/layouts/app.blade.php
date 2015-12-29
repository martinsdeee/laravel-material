@extends('layouts.base')

@section('base')

    @include('partials.navigation')

    @include('partials.errors')
    
    @yield('content')

@stop

    