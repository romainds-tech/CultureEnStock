<template>
  <div class="container">
    <div class="big-title text-3xl text-center p-10">Connexion</div>
    <form action="" method="POST">
      <div class="card w-1/3 m-auto rounded-3xl">

        <div class="container p-4 float-left w-max">
          <input
            class="mail-box p-2"
            type="email"
            id="email"
            name="email"
            placeholder="Mail"
            required
          /> <br>
          <input
            class="password-box p-2"
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

          <div class="norm-text p-2">Pas de compte ? <a href="">Inscrivez-vous !</a></div>
          

        </div>
      </div>
    </form>
  </div>
</template>