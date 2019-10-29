<template>
    <div>
        <div class="collection-front">
            <div class="card">
                <div class="card-header">
                    <h2>
                    {{collection.name}}
                    </h2>
                    <love-button></love-button>
                    </div>
                <img    src="https://img.milanuncios.com/fg/3122/02/312202783_3.jpg?VersionId=WnUaCnFtROFxtUrEnU5kw56_iK_ys16W" alt=""
                        class="card-img-top"
                        >
                <div class="card-footer">
                        <p>
                            {{collection.description}}
                        </p>
                    </div>
            </div>

            <div     
                v-for="comment in comments" :key="comment.id"
                class="card">
                <p>{{comment.text}}</p>
                <p>{{comment.user}}</p>
            </div>
            
        </div>
        <div     
        v-for="item in items" :key="item.index"
        class="card">item
        </div>
        <button type="button" class="btn btn-danger btn-circle">
            <i class="fas fa-pen"></i>
        </button>
    </div>
</template>

<script>
export default {
    data() {
        return {
            collection: {
                name: 'Collection Name',
                description: 'Lorem es la description de la colleccion'

            },
            comments: [
                {
                id: 1,
                text: 'texto Comentario 1',
                user: 'User1'
            },
            {
            id: 2,
            text: 'texto Comentario 2',
            user: 'User2'
            },
            ],
            items: [1,1,1]
        }
    }
}
</script>

<style>
.btn-circle {
    position:fixed;
    bottom: 20px;
    right: 20px;
}


</style>