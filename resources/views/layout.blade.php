<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet Bottling</title>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <script src="/jquery.js"></script>
    <script src="/slick/slick.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
<x-app-header></x-app-header>
@yield('content')
<x-app-footer></x-app-footer>

</body>
</html>
