<template>
<div>
    <!-- <category-selection></category-selection> -->
    <category-list
        @categorySelect = 'selectCategory()'
        ></category-list>
    <collection-list></collection-list>
    <footer >
        <div>
            Favorites
        </div>
        <div>
            News
        </div>
    </footer>
    
</div>
</template>

<script>
export default {

    data()  {
        return {

        }
    }

}
</script>

<style>

    footer {
        background-color: lightgrey;
        width: 100%;
        position: fixed;
        bottom: 0px;
        display: flex;
        justify-content: space-around;
    }

</style>
