<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="{{ asset('assets/images/favicon_1.ico') }}">

        <title>@yield('title')</title>

        @section('head')
            @include('admin.layout.head')
        @show


    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">


            @section('header')
                @include('admin.layout.topbar')
            @show


            @section('leftsite')
                @include('admin.layout.leftside')
            @show


            <div>
                @yield('contain')
            </div>



            @section('footer')
               @include('admin.layout.footer')
            @show

            @yield('script')
