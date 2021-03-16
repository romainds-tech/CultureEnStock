<template>
  <!-- Claire -->
  <!-- <div class="rounded-xl overflow-hidden bg-pink-400 to-teal-100 p-10 mt-24"> -->
  <div class="container">
    <div class="border-b-4 border-purple-800 mb-20">
      <div class="flex justify-between space-x-4 mt-24">
        <div
          class="bg-pink-900 h-44 w-44 text-white text-center font-extrabold flex items-center justify-center rounded-full"
        >
          photo
        </div>

        <div
          class="rounded-md bg-pink-900 text-white font-semibold flex items-center justify-center py-3 px-96"
        >
          PSEUDO
        </div>
      </div>

      <div class="items-stretch flex text-center space-x-4 justify-end my-5">
        <div class="rounded-full w-28 h-8 bg-yellow-500">S'abonner</div>
        <div class="rounded-full w-28 h-8 bg-red-700">Modifier</div>
      </div>
    </div>

    <!-- <div class="mt-20 w-9/12 ml-20 m-10">
      <div class="border-b-2 border-purple-800 mb-4">
        <div>PSEUDO</div>
      </div>
      <div class="items-stretch flex justify-between mb-4">
        <div class="w-1/4 border-b-2 border-pink-800">NOM</div>
        <div class="w-1/4 border-b-2 border-pink-800">PRENOM</div>
      </div>
      <div class="border-b-2 border-purple-800 mb-4">
        <div>PSEUDO</div>
      </div>
    </div> -->

    <div class="card w-2/3 m-auto rounded-3xl">
      <form id="profil-form" @submit="checkProfilForm" action="/" method="POST">
        <div class="container p-4">
          <input
            class="username-box p-2 input-xl w-full mb-6"
            type="text"
            id="username"
            name="username"
            placeholder="Pseudo"
            disabled
          />
          <br />
          <div class="flex justify-between ">
            <input
              class="lastname-box p-2 w-1/3"
              type="text"
              id="lastname"
              name="lastname"
              placeholder="Nom"
              disabled
            />
            <input
              class="name-box p-2 w-1/3"
              type="text"
              id="name"
              name="name"
              placeholder="Prénom"
              disabled
            />
          </div>
          <br />
          <input
            class="mail-box p-2 input-xl w-full "
            type="mail"
            id="mail"
            name="mail"
            placeholder="Mail"
            disabled
          />
        </div>
      </form>
    </div>
    <div class="items-stretch flex text-center space-x-4 justify-end my-5">
      <div class="rounded-full w-44 h-8 bg-green-600">Mes réservations</div>
    </div>
  </div>
  <!-- </div> -->
</template>


