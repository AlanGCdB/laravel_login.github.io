<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
    <title>essência</title>
</head>

<body>
    <div class="container">
        @include('site.layouts._partials.header')
        @yield('conteudo')
        @include('site.layouts._partials.footer')

    </div>
</body>

</html>
