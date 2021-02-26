<!-- Morgane -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CultureEnStock</title>

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body>
    <header style="background-color:lightgreen;">

        <div class="content_header" style="display: flex; flex-direction: row;">

            <div style="padding: 20px;">
                <img src="" class="log"/>
                <p>Logo</p>
            </div>

            <div style="padding: 20px;">
                <button>Réservation de la salle</button>
                <button>Evènement</button>
                <button>Réservation d'un billet</button>
            </div>

            <div style="padding: 20px;">
                <img src="" class="photo-profil"/>
                <p class="pseudo">Pseudo</p>
            </div>

        </div>

    </header>



        @yield('content')




    <footer>


    </footer>
</body>
</html>
