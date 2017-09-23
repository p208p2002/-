<!DOCTYPE html>
<html lang="en">
<head>
    @include('website.layouts.headContext')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
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