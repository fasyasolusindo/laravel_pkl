<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('header')
        <title>FASYA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">


        <!-- Styles -->
 <style>
     .btn btn-primary{
     background-color: yellow;}
     .container{
        margin-right: 
     }
 </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>
