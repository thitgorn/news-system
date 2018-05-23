<!doctype html>
<html lang="en">
<head>
    <style>
        body{
            margin: 0;
        }
    </style>
    <meta charset="UTF-8">
    {!! Theme::style('css/main.css') !!}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"/>
    <title>AAA news</title>
</head>
<body>
@auth
    @include('partials.admin-bar')
@endauth
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
</body>
</html>
