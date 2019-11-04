<template>
<div class="panel panel-default">
            <div class="panel-heading">Publicado el {{comment.created_at}} </div>

            <div class="panel-body">

            <input v-if="editMode" type="text" class="form-control" v-model="comment.content">
            <p  v-else id="reves">{{comment.content}}</p>

            </div>

            <div class="panel-footer">
            <button v-if="editMode" class="btn btn-success" v-on:click="onClickUpdate()">
                Guardar Cambios
            </button>
            <button v-else class="btn btn-default" v-on:click="onClickEdit()">
                Editar 
            </button>
            <button class="btn btn-danger" v-on:click="onClickDelete()">
                Eliminar
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['comment'],
        data(){
            return{
                editMode: false
            };
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
            onClickDelete() {
                axios.delete(`/comments/${this.comment.id}`).then(() => {
                    this.$emit('delete');
                });
            },
            onClickEdit() {
                this.editMode = true;
            },
            onClickUpdate() {
                const params = {
                    content: this.comment.content
                };
                axios.put(`/comments/${this.comment.id}`,params).then((response) => {
                this.editMode = false;
                const comment = response.data;
                this.$emit('update', comment);
                });
            }
        }
    }
</script>
<style>
#reves{
    display: flex;
    flex-direction: column-reverse;
}
</style>