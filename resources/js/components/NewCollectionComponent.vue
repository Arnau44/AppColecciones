<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Collection</div>
                
                    <div class="card-body">
                    <div class="card">
 
                        <form action="" method="POST" class="form">

                            <p v-if='!editMode.name' v-on:click = 'OnClickEdit("name")'>{{collection.name}}</p>
                            
                            <input v-if = "editMode.name" type="text" v-model = 'collection.name' class="form-control">
                            
                            <p v-if='!editMode.description' v-on:click = 'OnClickEdit("description")'>{{collection.description}}</p>
                            
                            <textarea  v-if = "editMode.description" name="description" v-model = 'collection.description' id=""  class="form-control"></textarea>
                            
                            <input type="submit" value="Save Collection">
                        </form>

                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-for="item in items" :key='item.index'>
        <new-item></new-item>
        </div>
    </div>
    
</template>

<script>
    export default {
        data() {
            return {

                newCollectionMode: true,
                editMode: {
                    name : false,
                    description : false
                    },
                collection: {},
                items: [1,1,1

                ]
            }
        },
        mounted() {
            if (!this.newCollectionMode) {
                this.dataLoad()
            }
            if (this.newCollectionMode) {
                //WE ARE IN NEW COLLECTION MODE
                this.defaultDataLoad()
            }
        },
        methods: {
            OnClickEdit(field) {

                Object.keys(this.editMode).forEach(e => {
                    this.editMode[e] = false;
                });
                this.editMode[field] = true;
            },
            dataLoad() {
                // LOAD DATA FROM DB
            },
            defaultDataLoad() {
                const collection = {
                    id: '',
                    name: 'newCollection',
                    description: 'New Description from new Collection',
                    category_id: 1
                }
                this.collection = collection
            }
            
            
        }
    }
</script>
