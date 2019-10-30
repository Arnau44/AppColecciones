<template>
<div>
  <i class="fas fa-pen" v-on:click="edit()"></i> 
</div>
</template>

<script>
export default {

    methods: {

        edit() {
            //emit
            alert('Edit')
        }
    }
}
</script>

<style scoped>


    i:hover {
        color: darkgreen;
    }

</style>
