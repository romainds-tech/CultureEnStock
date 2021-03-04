<template>
    <div>
        <event
            v-for="(event, index) in events"
            :key="index"
            :id="event.idevenement"
            :idtype="event.idtype"
            :libelle="event.libelle"
            :datedebut="event.date_debut"
        ></event>
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

    data() {
        return {
            events: [],
        }
    }
}
</script>
