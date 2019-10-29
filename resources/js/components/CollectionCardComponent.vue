<template>
    <div class="card ">
        <div class="card-header title">{{collection.name}}</div>
        <img src="" class = "card-img-top"
        v-on:click="goToCollection()"
        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTb2uP4V6vxSK235Y88V8C8nQSoe13BnzWzs_VIzNLW2ppA1KeN&s" alt="">        <div class="footer">
            
            <div class="likes"><love-button :collection = 'collection'></love-button></div>

        </div>
    </div>
    <!-- <div class="card collection-card">
        <div class="title">{{collection.name}}</div>
        <div class = "image"
        v-on:click="goToCollection()"
        src="" alt=""></div>
        <div class="footer">
            
            <div class="likes"><love-button :collection = 'collection'></love-button></div>

        </div>
    </div> -->
</template>

<script>
export default {
    props: ['collection'],
    methods: {
        goToCollection(){
            location.href='/app/collection/'+this.collection.id
        }
    }
}
</script>

<style scoped>

    .collection-card {
        box-shadow: 3px 3px 10px grey;
        max-width: 250px;
        height  : 200px;
        display: flex;
        justify-content: space-between;
        border-radius: 1em;
        /* background-color: #f3f3f3 */


    }

    .title {
        width: 100%;
        padding: .8em;
        border-bottom: 1px solid black;
    }
    .image {
        width: 160px;
        height: 160px;
        background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTb2uP4V6vxSK235Y88V8C8nQSoe13BnzWzs_VIzNLW2ppA1KeN&s');

        background-size: cover;
        background-position: center;



    }
    .footer {
        width: 100%;
        padding: .8em;
         border-top: 1px solid black;

    }


</style>
