<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite("resources/js/app.js")

    @yield('head')
</head>
<body>
    <div class="text-center">
        @include('components.header')
        @include('components.jumboo')
        @include('components.griglia-comcs')
        @include('components.service')
        @include('components.up-footer')
        @include('components.footer')
    </div>
</body>
</html>
