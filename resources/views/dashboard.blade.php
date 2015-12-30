<?php 
$cards = collect([
    [
        'auth' => '',
        'name' => 'Application',
        'amount' => '',
        'icon' => 'apps',
        'url' => '/dashboard',
    ], 
    // [
    //     'auth' => '',
    //     'name' => 'Tasks',
    //     'amount' => rand(11,81),
    //     'icon' => 'check_circle',
    //     'url' => '/tasks',
    // ],
    // [
    //     'auth' => '',
    //     'name' => 'Clients',
    //     'amount' => rand(11,54),
    //     'icon' => 'business_center',
    //     'url' => '/tasks',
    // ],
    // [
    //     'auth' => '',
    //     'name' => 'Users',
    //     'amount' => rand(27,108),
    //     'icon' => 'group',
    //     'url' => '/users',
    // ],
    // [
    //     'auth' => '',
    //     'name' => 'Roles',
    //     'amount' => '',
    //     'icon' => 'security',
    //     'url' => '/roles',
    // ],
    // [
    //     'auth' => '',
    //     'name' => 'Permissions',
    //     'amount' => '',
    //     'icon' => 'layers',
    //     'url' => '/roles',
    // ],
    // [
    //     'auth' => '',
    //     'name' => 'System',
    //     'amount' => '',
    //     'icon' => 'dns',
    //     'url' => '/system',
    // ],
]);
?>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12">
            
        </div>
    </div>
    <div class="row">
        @foreach($cards as $card)
        <a href="{{$card['url']}}">
            <div class="col s12 m6 l4">
                <div class="card-panel z-depth-1">
                    <div class="row valign-wrapper" style="margin:0">
                        <div class="col s2">
                            <i class="material-icons small circle left {{ Config::get('template.primary-color') }}-text text-darken-2" >{{$card['icon']}}</i>
                        </div>
                        <div class="col s10">
                            <h5 class="{{ Config::get('template.primary-color') }}-text text-darken-2 card-title">
                               {{$card['name']}} 
                               <span class="right">{{$card['amount']}}</span> 
                           </h5>
                       </div>
                   </div>
               </div>
           </div>
       </a>
       @endforeach
    </div>
</div>

@endsection
