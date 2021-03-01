<template>

  <div class="container">


        <!-- TON CODE A ADAPTER -->
        <div class="content_header bg-green-200 flex py-4 align-middle">

            <router-link to="/">
                <div class="flex-none w-40 text-center">
                    <img src="" class="log"/>
                    <p>Logo</p>
                </div>
            </router-link>

            <div class="flex-grow flex-wrap flex text-center border-l-2 border-r-2">
                <button class="flex-1 px-2 text-center underline whitespace-nowrap">Réservation de la salle</button>
                <button class="flex-1 px-2 text-center underline">Evènement</button>
                <button class="flex-1 px-2 text-center underline whitespace-nowrap">Réservation d'un billet</button>
            </div>


            <div class="flex-none w-40 text-center">
                <router-link to="/login">Se connecter</router-link>
                <!--Si connecté
                <router-link to="/profile">
                    <img src="" class="photo-profil"/>
                    <p class="pseudo">Pseudo</p>
                 </router-link> -->
            </div>

        </div>

        <!-- TON CODE A ADAPTER -->

    <!--
    <router-link to="/"> Home </router-link>
    <router-link to="/login"> Login </router-link>
    <router-link to="/profile"> Profil </router-link> -->

    <router-view></router-view>
  </div>

</template>

<script>
    export default {
    mounted() {
        console.log("Component mounted.");
    },
    };
</script>
