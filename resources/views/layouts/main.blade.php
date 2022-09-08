<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    {{-- fonte do google --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto">

    {{-- css bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    {{-- css da aplicação --}}
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/scripts.js"></script>

</head>

<body>
    @yield('content')

    <footer>
        <p>HDC Events &copy; 2020</p>
    </footer>
</body>

</html>
