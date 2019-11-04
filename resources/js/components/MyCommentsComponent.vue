<template>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form-component @new="addComment"></form-component>
                <comments-component v-for="(comment, index) in comments" 
                :key="comment.id"
                :comment="comment"
                @update="updateComment(index, arguments)"
                @delete="deleteComment(index)">
                </comments-component>
                
            </div>
        </div>
 

</template>
<script>
    export default {
        data(){
            return {
                comments:[]
            }
        },
        mounted() {
            axios.get('/comments').then((response) =>  {
                const comments = []
                for(let comment in response.data ){
                comments.push(response.data[comment])
                }
                this.comments = comments;
            });
        },
        methods:{
            addComment(comment){
                this.comments.push(comment);
            },
            deleteComment(index) {
                this.comments.splice(index, 1);
                console.log(index)
            },
            updateComment(index, comment) {
                this.comment[index] = comment;  
            },
           
            
        }
    }
</script>