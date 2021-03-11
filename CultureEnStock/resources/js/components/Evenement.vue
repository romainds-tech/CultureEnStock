<template>
    <div class="w-1/2 m-auto border-2">
        <div class="eventtitle text-center p-2 font-extrabold text-2xl">
            {{ libelle }}
        </div>
        <div class="eventdesc p-2 text-justify"></div>
        <div class="eventdate p-2 w-full text-right font-extralight italic">Le {{ datedebut }}</div>
        <div class="eventprice p-2 w-full text-right">{{ prix }} €</div>
        <button class="btn-reserve block m-auto p-2 border-2 bg-gray-300">Réserver</button>
    </div>
</template>
<script>
export default {
    props: ["idevenement", "idtype", "libelle", "datedebut", "prix"],
    computed: {

    },
    methods: {

    }
}
</script>
