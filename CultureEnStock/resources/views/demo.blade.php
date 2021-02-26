@extends('layout.main')
@section('content')

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>DEMO PAGE</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>

<body>
    <div id="app">
        <div class="container">

            <div class="pokemons">

                <div class="pokemon">
                    <h2 class="namepoke">Bulbizarre</h2>
                    <p class="pokedesc">Je suis trop mignon et j'aime manger des feuilles</p>
                </div>
                
                <div class="pokemon">
                    <h2 class="namepoke">Korillon</h2>
                    <p class="pokedesc">Je suis un grello et un peu mignon</p>
                </div>

            </div>
        </div>
    </div>
</body>

</html>


@endsection