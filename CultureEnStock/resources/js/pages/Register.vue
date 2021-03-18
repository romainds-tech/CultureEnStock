<template>
  <!-- Alexis -->
  <div class="container">
    <div class="big-title text-3xl text-center p-10">Inscription</div>
    <div class="card w-1/3 m-auto rounded-3xl">
      <div class="container p-4 float-left w-max">
        <input
          class="username-box p-2 input-xl"
          type="text"
          id="username"
          name="username"
          placeholder="Pseudo"
          v-model="form.pseudo"
          required
        />
        <br />
        <input
          class="lastname-box p-2"
          type="text"
          id="lastname"
          name="lastname"
          placeholder="Nom"
          v-model="form.last_name"
          required
        />
        <input
          class="name-box p-2"
          type="text"
          id="name"
          name="name"
          placeholder="Prénom"
          v-model="form.name"
          required
        />
        <br />
        <input
          class="mail-box p-2 input-xl"
          type="email"
          id="email"
          name="email"
          placeholder="Email"
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
        <br />
        <input
          class="validate-pwd-box p-2 input-xl"
          type="password"
          id="validate-pwd"
          name="validate-pwd"
          placeholder="Confirmer mot de passe"
          v-model="form.password_confirmation"
          required
        />
      </div>

      <div class="container p-4 text-center">
        <button class="btn-cancel">Retour</button>
        <button @click.prevent="saveForm" type="submit" class="btn-validate"> Connexion </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      form: {
        pseudo: '',
        name: '',
        last_name: '',
        email: '',
        password: '',
        password_confirmation: '',
      },
      errors: [],
    };
  },
  methods: {
    saveForm() {
      axios
        .post("/api/register", this.form)
        .then(() => {
          console.log("saved");
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
        });
    },
  },
};
</script>