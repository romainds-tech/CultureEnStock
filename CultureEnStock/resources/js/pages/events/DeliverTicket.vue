<template>
  <div class="container">
    <!-- Claire -->
    <div class="card w-2/3 m-auto rounded-3xl">
      <form id="profil-form" @submit="checkProfilForm" action="/" method="POST">
        <div class="container p-4">
          <div class="flex">
            <!-- Cette ligne devra etre pré remplie -->
            <input
              class="lastname-box p-2 w-1/3 bg-green-500"
              type="text"
              id="lastname"
              name="lastname"
              placeholder="Nom *"
              required
            />
            <input
              class="name-box p-2 w-1/3 bg-blue-500"
              type="text"
              id="name"
              name="name"
              placeholder="Prénom *"
              required
            />
            <input
              class="numade-box p-2 w-1/3 bg-indigo-500"
              type="text"
              id="numade"
              name="numade"
              placeholder="N° Adhérent"
            />
          </div>

          <br />
          <input
            class="mail-box p-2 input-xl w-full mb-8 bg-pink-400"
            type="mail"
            id="mail"
            name="mail"
            placeholder="Mail *"
            required
          />

          <br />
          <select
            class="event-box p-2 input-xl w-full bg-indigo-600 mx-2 mb-8"
            type="selected"
            id="event"
            name="event"
            placeholder="Evenement *"
          >
            <option placeholder="teste" v-bind:value="{ number: 123 }"></option>
          </select>

          <br />
          <select
            class="date-box p-2 input-xl w-full bg-yellow-600 mx-2 mb-8"
            type="selected"
            id="date"
            name="date"
            placeholder="Date *"
          >
            <option placeholder="teste" v-bind:value="{ number: 123 }"></option>
          </select>

          <br />
          <select
            class="place-box p-2 input-xl w-1/3 ml-2 bg-red-700"
            type="selected"
            id="place"
            name="place"
            placeholder="Votre place *">
            <option placeholder="teste" v-bind:value="{ number: 123 }"></option>
          </select>

          <div
            class="items-stretch flex text-center space-x-4 justify-end my-3"
          >
            <div class="rounded-full w-28 h-8 bg-yellow-500">S'abonner</div>
            <div class="rounded-full w-28 h-8 bg-red-700">Modifier</div>
          </div>
        </div>
      </form>
    </div>
  </div>
</template>
