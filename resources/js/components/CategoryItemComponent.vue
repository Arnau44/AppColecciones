<template>
    <div class="item">
       <!-- <p>{{category.name}}</p> -->
       <img :src="category.icon">
    </div>
</template>

<script>


export default {
    props: ['category']

}
</script>

<style scoped>
    .item {
        padding: 1em;

    }

    .item:hover {
        background-color:lightgrey;
        cursor: pointer;
        border-radius: 1em;

    }

    img {
        width: 40px;
    }
</style>
