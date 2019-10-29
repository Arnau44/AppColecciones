<template>
    <div class="card">
    <div class="item">
       <!-- <p>{{category.name}}</p> -->
       <img :src="category.icon">
    </div>
    </div>
</template>

<script>


export default {
    props: ['category']

}
</script>

<style scoped>
    .item {
        padding: .7em;

    }

    .item:hover {
        background-color:lightgrey;
        cursor: pointer;
        border-radius: 0em;

    }

    img {
        width: 35px;
    }
</style>
