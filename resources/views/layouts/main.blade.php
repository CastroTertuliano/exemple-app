<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!--Fonte do Google-->

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!--CSS Bootstrap-->

        <!--CSS da aplicação-->

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>

    <body class="antialiased">

        @yield('content')

        <footer>

            <p>&copy 2022 CESTAS SOFISTICADAS ALIMENTOS E PRESENTES LTDA - ME | Cestas de Café da Manhã - Todos os direitos reservados.</p>
        
        </footer>

    </body>

</html>
