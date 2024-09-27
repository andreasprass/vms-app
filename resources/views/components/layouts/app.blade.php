<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{ isset($title) ? "$title | VMS WebApp" : 'VMS WebApp' }}</title>
        @livewireStyles
        @vite('resources/css/app.css')
    </head>
    <body class="">
        {{ $slot }}

        @livewireScripts
    </body>
</html>
