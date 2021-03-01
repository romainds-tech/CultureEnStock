@extends('layout.main')
@section('content')

<div class="container">
        <div class="big-title">Inscription</div>
        <form action="" method="POST">

            <div class="card">
                <div class="container">
                    <input class="username-box" type="text" id="username" name="username" placeholder="Pseudo" required>
                    <input class="lastname-box" type="text" id="lastname" name="lastname" placeholder="Nom" required>
                    <input class="name-box" type="text" id="name" name="name" placeholder="Prénom" required>
                    <input class="mail-box" type="mail" id="mail" name="mail" required>
                    <input class="password-box" type="password" id="password" name="password" required>
                    <input class="validate-pwd-box" type="password" id="validate-pwd" name="validate-pwd" required>
                </div>
                <div class="container">
                    <button class="btn-cancel">Retour</button>
                    <input class="btn-validate" type="submit" value="Valider">
                </div>

            </div>

        </form>

    </div>

@endsection
