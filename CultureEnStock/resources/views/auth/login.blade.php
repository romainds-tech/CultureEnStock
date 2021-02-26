<!-- Romain -->
@extends('layout.main')
@section('content')


    <div class="container">
        <div class="big-title">Connexion</div>
        <form action="" method="POST">

            <div class="card">
                <div class="container">
                        <input class="mail-box" type="email" id="email" name="email" placeholder="Mail" required>
                        <input class="password-box" type="password" id="password" name="password" placeholder="Mot de passe" required>
                </div>
                <div class="container">
                    <button class="btn-cancel">Retour</button>
                    <input class="btn-validate" type="submit" value="Connexion">
                    <div class="norm-text">Pas de compte ?</div> <a href="">Inscrivez-vous !</a>
                </div>

            </div>

        </form>
        
    </div>


@endsection