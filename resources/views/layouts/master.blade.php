<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li>
                <a href="{{ route('page.clocks') }}">Clocks</a>
            </li>
            <li>
                <a href="{{ route('page.posts') }}">Posts</a>
            </li>
            <li>
                <a href="{{ route('page.todo') }}">Todo</a>
            </li>
        </ul>
    </nav>
    <hr>
</header>
@yield('content')
<div id="app">
    @yield('app')
</div>
</body>
</html>
