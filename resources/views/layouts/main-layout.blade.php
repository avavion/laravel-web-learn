<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script src="https://kit.fontawesome.com/5c55b6f969.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/swiper.min.css') }}"/>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>@yield('title')</title>
</head>

<body class='template'>
@include('includes.header')
@yield('content')
@include('includes.footer')
</body>

</html>
