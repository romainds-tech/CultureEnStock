<!-- Romain -->
<template>
  <div class="container">
    <div class="big-title text-3xl text-center p-10">Connexion</div>
    
      <!-- Gérer message d'erreur "Mot de passe incorrect" etc. -->

      <div class="card w-1/3 m-auto rounded-3xl">
        <div class="container p-4 float-left w-max">

          <!-- Taille XL marche pas (app.css) -->
          
          <input
            class="mail-box p-2 input-xl"
            type="email"
            id="email"
            name="email"
            placeholder="Mail"
            required
          />
          <br />
          <input
            class="password-box p-2 input-xl"
            type="password"
            id="password"
            name="password"
            placeholder="Mot de passe"
            required
          />
        </div>

        <div class="container p-4 text-center">
          <button class="btn-cancel">Retour</button>
          <input class="btn-validate" type="submit" value="Connexion" />

          <div class="norm-text p-2">
            Pas de compte ?
            <router-link to="/register">Inscrivez-vous !</router-link>
          </div>

        </div>
      </div>
 
  </div>
</template>

<script>
export default {
  mounted() {
    axios.get("/sanctum/csrf-cookie").then((response) => {
    
    });
  },
};
</script>
