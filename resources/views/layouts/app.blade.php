<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog Laravel')</title>
</head>
<body>

    <nav>
        <a href="{{ route('posts.index') }}">Blog</a> |
        <a href="{{ route('posts.create') }}">Buat Post</a>
    </nav>

    <hr>

    @yield('content')

</body>
</html>