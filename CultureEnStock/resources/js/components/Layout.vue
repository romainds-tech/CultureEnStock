<!-- Morgane -->

<template>
  <div>
    <div
      class="content_header bg-green-200 flex py-4 align-middle mb-20 items-center"
    >
      <div class="flex w-80 text-center">
        <router-link to="/">

          <img
            src="\CultureEnStock\CultureEnStock\public\img\logo.png"
            class="flex-1 px-12"
          />
        </router-link>
      </div>

      <div
        class="flex-grow flex-wrap flex text-center border-l-2 border-r-2 border-gray-800"
      >
        <router-link
          class="flex-1 px-2 text-center underline whitespace-nowrap"
          to="/event/create"
        >
          Créer un évènement</router-link
        >
        <router-link
          class="flex-1 px-2 text-center underline whitespace-nowrap"
          to="/event/list"
        >
          Nos spectacles</router-link
        >
        <router-link
          class="flex-1 px-2 text-center underline whitespace-nowrap"
          to="/event/deliver"
        >
          Délivrer un ticket</router-link
        >
      </div>


      <div v-if="connecte" class="w-80 text-center">   <!-- Trouver la condition à mettre -->
        <router-link to="/profile">
          <img src="" class="" />
          <p>Pseudo</p>
        </router-link>
      </div>

      <div v-else class="w-80 flex text-center flex-wrap">
        <router-link to="/login" class="flex-1 px-2 whitespace-nowrap"
          >Se connecter</router-link
        >
        <router-link to="/register" class="flex-1 px-2 whitespace-nowrap"
          >S'inscrire</router-link
        >
      </div>
    </div>
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
