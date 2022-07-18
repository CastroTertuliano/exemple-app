<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>

    </head>
    <body class="antialiased">

        <h1>Bem vindo</h1>

        <img src ="/img/529-240420za.jpg" alt="Banner"

        @if(10>5)s
            <p>A condição é true</p>
        @endif

        <p>{{ $nome }}</p>

        @if( $nome == "Pedro")
        <p>O nome é Pedro</p>
        @elseif($nome == "Matheus")
        <p>O nome é {{$nome}} ele tem {{$idade}} anos, e trabalha como {{$profissão}}</p>
        @else
        <p>O nome não é pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)

            <p>{{$i}} - {{ $arr[$i] }}</p>

                @if($i == 2)
                <p>O i é 2</p>
                @endif

        @endfor

        @foreach($nomes as $nome)

            <p>{{ $loop->index }}</p>

            <p>{{ $nome }}</p>

        @endforeach

        @php
            
            $name = "joão";

            echo $name;

        @endphp

        {{-- Assim que se usa comentário no blade --}}

    </body>
</html>
