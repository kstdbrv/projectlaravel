<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <title>@yield('title')</title>
</head>
<body>
{{-- wrapper используется для прижатия footer --}}
    <div class="wrapper">
        @include('includes.header')

        <div class="container">
            @include('includes.messages')
        </div>

        @yield('content')

        @include('includes.footer')
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="/path/to/your/jquery"><\/script>');
 </script>
<script src="/js/app.js"></script>
</body>
</html>
