<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
</head>
<body>
{{-- wrapper используется для прижатия footer --}}
    <div class="wrapper">
        @include('includes.header')

        @include('includes.messages')

        @yield('content')

        @include('includes.footer')
    </div>
<script src="/js/app.js"></script>
</body>
</html>
