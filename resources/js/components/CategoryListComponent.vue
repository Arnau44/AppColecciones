<template>
    <div class="category-list">
        
        <div v-for="(category, id) in categories"
            :key='category.index'
            v-on:click='onClickCategorySelect(category.id, id)'>
        <category-item
            :category='category'
            >
           
        </category-item>
        </div>

    </div>
</template>

<script>
export default {
    data() {
        return {
            categories: [],
            categoryId: null
        }
    },

    mounted() {
        this.getCategories();
    },

    methods: {

        getCategories() {
            axios.get('/api/home')
                .then(
                    (res) => this.categories = res.data
                )
        },
        onClickCategorySelect(id) {
            //alert (id)
            this.$emit('categorySelect', id)
        }
    }

}
</script>

<style>

    .category-list {
        display: flex;

        justify-content: center;
    }

</style>
