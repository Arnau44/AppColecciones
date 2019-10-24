<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Item</div>

                    <div class="card-body">
                        

                        <form action="" method="POST" class="form">
                            <p>Item Name</p>
                            <input type="text" name="name" class="form-control">
                            <label for="description" class="form-label">Item Description</label>
                            <textarea name="description" id=""  class="form-control"></textarea>
                            <input type="submit" value="Create Item">
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
       
        data() {
            return {
                editMode: {
                    name:false,
                    description: false
                }
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
