<template>
    <div>
        <div class="collection-front">
            
        </div>
        <div     
        v-for="item in items" :key="item.index"
        class="card">item
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: [1,1,1]
        }
    }
}
</script>

<style>

</style>