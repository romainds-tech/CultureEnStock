<template>
    <!-- Alexis -->
    <div class="container">
        <div class="big-title text-3xl text-center p-10">Inscription</div>
        <div class="card w-1/3 m-auto rounded-3xl">
            <form id="register-form" @submit="checkRegisterForm" action="/" method="POST">
                <div class="container p-4 float-left w-max">
                    <input
                        class="username-box p-2 input-xl"
                        type="text"
                        id="username"
                        name="username"
                        placeholder="Pseudo"
                        required
                    /> <br>
                    <input
                        class="lastname-box p-2"
                        type="text"
                        id="lastname"
                        name="lastname"
                        placeholder="Nom"
                        required
                    />
                    <input
                        class="name-box p-2"
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Prénom"
                        required
                    /> <br>
                    <input
                        class="mail-box p-2 input-xl"
                        type="mail"
                        id="mail"
                        name="mail"
                        placeholder="Mail"
                        required
                    /> <br>
                    <input
                        class="password-box p-2 input-xl"
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Mot de passe"
                        required
                    /> <br>
                    <input
                        class="validate-pwd-box p-2 input-xl"
                        type="password"
                        id="validate-pwd"
                        name="validate-pwd"
                        placeholder="Confirmer mot de passe"
                        required
                    />
                </div>

                <div class="container p-4 text-center">
                    <input class="btn-validate" type="submit" value="Connexion" />
                    <router-link class="btn-cancel" to="/">Retour</router-link>
                </div>
            </form>
        </div>
    </div>
</template>
