<template>
    <!-- Alexis -->
    <div class="container">
        <div class="big-title text-3xl text-center p-10">Réservation d'un billet pour un événement</div>
        <div class="card w-2/3 m-auto rounded-3xl">
            <form id="reservation-billet-form" @submit="checkReservationBilletForm" action="/profile" method="post">
                <div class="container p-4 float-left w-max">
                    <!-- Nom prenom pas besoin -> info directement à cause du profil -->
                    <div class="form-input">
                        <label for="place">Place <strong>*</strong></label><br>
                        <input
                            class="place-box p-2 input-sm"
                            type="text"
                            id="place"
                            name="place"
                            placeholder="F610"
                            size="4"
                            required
                        />
                    </div>
                </div>
            </form>
        </div>
    </div>

</template>
