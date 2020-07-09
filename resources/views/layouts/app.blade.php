<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <title>@yield('page-title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        @include('partials.menu')
        @yield('content')
    </body>
</html>
