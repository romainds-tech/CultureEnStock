<template>
    <div class="container">
        <div class="w-1/2 m-auto border-2">
            <event
                v-for="(event, index) in events"
                :key="index"
                :id="event.idevenement"
                :idtype="event.idtype"
                :libelle="event.libelle"
                :datedebut="event.date_debut"
            ></event>
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
        axios.get("/api/evenement")
            .then((response) => {
                this.events = response.data.data;
            })
    },
}
</script>
