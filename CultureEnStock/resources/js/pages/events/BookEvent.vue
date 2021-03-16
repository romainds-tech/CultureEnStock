<template>
    <!-- Alexis -->
    <div class="container" v-if="event">
        <div class="big-title text-3xl text-center p-10">Réservation d'un billet pour {{ event.libelle }}</div>
        <div class="card w-2/3 m-auto rounded-3xl">
            <form id="reservation-billet-form" @submit="checkReservationBilletForm" action="/profile" method="post">
                <div class="container p-4 float-left w-max">
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

<script>
import Evenement from '../../components/Evenement.vue';

export default {
    components: {
        "event": Evenement
    },

    mounted() {
        axios.get("/api/evenement/" + this.$route.params.id)
            .then((response) => {
                this.event = response.data.data;
            })
    },

    data() {
        return {
            event: null
        }
    },

    methods: {
        checkReservationBilletForm() {
            // TODO
        }
    }
}
</script>

