<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>

    </head>
    <body>
        <h1>Hello world</h1>

        <img src="/img/banner.jpg" alt="Banner">

        @if($nome  == 'João')
            <p>Meu nome é {{$nome}}</p>
        @endif
        
    </body>
</html>
