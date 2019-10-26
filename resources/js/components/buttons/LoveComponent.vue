<template>
<div>
  <i class="far fa-heart" v-on:click="iLove()"></i>
  <span> 123</span>

  </div>
</template>

<script>
export default {

    methods: {

        iLove() {
            //emit
            alert('I love that')
        }
    }
}
</script>

<style>


    .fa-heart:hover {
        color: red;
    }

</style>
