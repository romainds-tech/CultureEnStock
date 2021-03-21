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
            v-model="form.email"
            required
          />
          <br />
          <input
            class="password-box p-2 input-xl"
            type="password"
            id="password"
            name="password"
            placeholder="Mot de passe"
            v-model="form.password"
            required
          />
        </div>

        <div class="container p-4 text-center">
          <button class="btn-cancel">Retour</button>

          <button @click.prevent="loginUser" type="submit" class="btn-validate"> Connexion </button>

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
  data(){
    return{
      form:{
        email: '',
        password: ''
      },
      errors: []
    }
  },
  methods:{
    loginUser(){
      axios.post('api/login', this.form).then(() =>{
        this.$router.push({ name: "profile" });
      }).catch((error) =>{
        this.errors = error.response.data.errors;
      })
    }
  }
};
</script>
