<template>
    
    <div class="collection-list">
        
        <collection-card 
            v-for='(collection, index) in collections'
            :key="collection.id"
            :collection='collection'
            class=""
            @delete = "deleteCollection(index)">
            </collection-card>

    </div>

</template>

<script>

export default {
    props: {
        categoryId: Number
    },
    data()  {
        return {
            collections: []
        }
    },
    mounted() {

        this.importCategoryData(this.categoryId);
    
    },

    watch: {
        categoryId: function () {
            this.importCategoryData(this.categoryId);
        },
    },

    methods: {

        importCategoryData(id){
            axios.get(
            `/api/category/collections/${id}`)
                .then( (response) =>
                {
                    this.collections = response.data}
                )
        },
        deleteCollection(index){
            this.collections.splice(index,1)
        }
    }
}

</script>

<style>

    .collection-list {
        width: 90%;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap:1em;
    }

</style>
