<template>
    <div class="container">
        <div class="category-list">
            <div  v-for="category in categories"
                :key='category.index'
                >

                <span><input type="checkbox" name="" id=""></span>
                <category-item :category='category'></category-item>
                <div>{{category.description}}</div>
        </div>
            </div>
        <button>Continue</button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            categories: []
        }
    },

    mounted() {
        this.getCategories();
    },

    methods: {

        getCategories() {
            axios.get('api/home')
                .then(
                    (res) => this.categories = res.data
                )
        }
    }

}
</script>

<style scoped>

    .category-list {
        display: flex;

        justify-content: center;
    }

</style>
