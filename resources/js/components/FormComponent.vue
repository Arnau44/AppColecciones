<template>
<div class="panel panel-default">
      <div class="panel-heading"> Comentario  </div>

        <div class="panel-body">
          
            <form action="" v-on:submit.prevent="newComment()">
                <div class="form-group">
                    <label for="comentario "></label>
                    <input type="text" class="form-control" name="comentario" v-model="content">
                    <button type="submit" class="btn btn-primary">
                    Enviar Comentario
                    </button>
                </div>

            </form>
       </div>
    </div>

</template>

<script>
    export default {
        data(){
            return {
                content:'',
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            newComment(){
                const params ={
                    content:this.content
                };
                this.content = '';

                axios.post('/comments', params)
                    .then((response) => {
                        const comment = response.data;
                        this.$emit('new', comment);
            });

            }
        }
    }
</script>
