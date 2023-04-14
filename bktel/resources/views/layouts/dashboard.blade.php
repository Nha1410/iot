<?php

use Illuminate\Support\Facades\Auth;

     $role_id = Auth::user()->role_id ;
?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav-bar-component
            :logout_url = "'{{ route('logout') }}' " 
        ></nav-bar-component>
        <div class="flex flex-row">
            <side-bar-component
            :role_id = {{json_encode($role_id)}} >
            
            </side-bar-component>
            <!-- <main-content-component></main-content-component> -->
            <main class="w-full">
                @yield('content')
            </main>
        </div>

    </div>
</body>