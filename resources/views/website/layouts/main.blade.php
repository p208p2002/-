<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.layouts.headContext')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>聽讀說寫:全面進擊-Engilsh Learning @yield('title')</title>
    <style>
    html, body {
    max-width: 100%;
    overflow-x: hidden;
    }
    </style>
</head>
<body>
    @include('website.layouts.topnav')
    @include('website.layouts.nav')

    <div class="container">
        @yield('container')
    </div>

    @include('website.layouts.footer')
    @include('website.layouts.jsFileAsBody')
</body>
</html>