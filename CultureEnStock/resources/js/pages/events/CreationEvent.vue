<template>
    <!-- Alexis -->
    <div class="container">
        <div class="big-title text-3xl text-center p-10">Organiser un évènement</div>
        <div class="card w-2/3 m-auto rounded-3xl">
            <form id="reservation-billet-form" @submit="checkReservationBilletForm" action="/profile" method="post">
                <div class="form-input text-center">
                    <label for="name">Nom</label><br>
                    <input
                        class="name-box p-2 input-xl"
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Nom de la représentation"
                        required
                    />
                </div>

                <div class="form-input text-center">
                    <label for="name">Type</label><br>
                    <select id="type-event">
                        <option value="cinema">Cinema</option>
                        <option value="conference">Conférence</option>
                        <option value="spectacle">Spectacle</option>
                    </select>
                </div>

                <div class="form-input text-center">
                    <label for="name">Prix</label><br>
                    <input
                        class="price-box p-2 input-xl"
                        type="number"
                        id="price"
                        name="price"
                        min="0"
                        placeholder="Prix de la représentation"
                        required
                    />
                </div>

                <div class="form-input text-center">
                    <label for="school">Sortie scolaire</label>
                    <input
                        type="checkbox"
                        id="school"
                        name="school"
                    />
                </div>

                <div class="container p-4 text-center">
                    <router-link class="btn-cancel" to="/">Retour</router-link>
                    <input class="btn-validate" type="submit" value="Créer" />
                </div>
            </form>
        </div>
    </div>
</template>
