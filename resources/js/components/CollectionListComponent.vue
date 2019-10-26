<template>
    <div class="collection-list">
        <collection-card v-for='collection in collections'
            :key="collection.index"
            :collection='collection'></collection-card>
    </div>
</template>

<script>
export default {
    props: [],
    data()  {
        return {
            collections: []
        }
    },
    mounted() {
        this.importCategoryData(1);
    },
    methods: {
        importCategoryData(id){
            axios.get(
            `/api/category/collections/${id}`)
                .then( (response) =>
                {
                    this.collections = response.data}
                )
        }
    }

}
</script>

<style>

    .collection-list {
        width: 90%;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        gap:1em;
    }

</style>
