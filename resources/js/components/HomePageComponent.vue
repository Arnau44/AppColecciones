<template>
<div>
    <!-- <category-selection></category-selection> -->
    <category-list
       
        @categorySelect = 'selectCategory'
        
        ></category-list>
    <collection-list
       :categoryId = this.categoryId
    ></collection-list>
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
            categoryId: 6
        }
    },
    mounted() {
      
    },
    methods: {
        selectCategory(category) {
            this.categoryId = category
            //alert(this.categoryId )
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
