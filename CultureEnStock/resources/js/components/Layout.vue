<!-- Morgane -->

<template>
  <div>
    <!-- TON CODE A ADAPTER -->
    <div class="content_header bg-green-200 flex py-4 align-middle mb-20">
      <router-link to="/">
        <div class="flex-none w-80 text-center">
          <img src="" class="log" />
          <p>Logo</p>
        </div>
      </router-link>

      <div
        class="flex-grow flex-wrap flex text-center border-l-2 border-r-2 border-gray-800"
      >
        <router-link
          class="flex-1 px-2 text-center underline whitespace-nowrap"
          to=""
        >
          Créer un évènement</router-link
        >
        <router-link
          class="flex-1 px-2 text-center underline whitespace-nowrap"
          to=""
        >
          Nos spectacles</router-link
        >
        <router-link
          class="flex-1 px-2 text-center underline whitespace-nowrap"
          to="/reservationBillet"
        >
          Délivrer un ticket</router-link
        >
      </div>

      <div class="flex w-80 text-center">
        <!-- Si pas connecté-->
                <router-link to="/login" class="flex-1">Se connecter</router-link>
                <router-link to="/register" class="flex-1">S'inscrire</router-link>
        <!-- Si connecté
        <router-link to="/profile">
          <img src="" class="" />
          <p>Pseudo</p>
        </router-link>-->
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
