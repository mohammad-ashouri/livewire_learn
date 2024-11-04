<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Actions' }}</title>
    </head>
    <body style="background-color: #18181b; color:white">
        {{ $slot }}
    </body>
</html>
