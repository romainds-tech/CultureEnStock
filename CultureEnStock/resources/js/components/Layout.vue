<template>

  <div class="container">


      <!-- TON CODE A ADAPTER -->
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

    <!-- TON CODE A ADAPTER -->


    <router-link to="/"> Home </router-link>
    <router-link to="/login"> Login </router-link>
    <router-link to="/profile"> Profil </router-link>

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
