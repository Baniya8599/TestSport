<template>
    <div>
        <form>
            <div class="box">
                    <label class="label">Category</label>
                    <div class="control">
                        <input type="text" v-model="input.category" name="category" placeholder="category_title">
                    </div>
                    <label class="label">Category Description</label>
                    <div class="control">
                        <textarea v-model="input.category_description " name="category_description"
                                  placeholder="category description"></textarea>
                    </div>
            </div>
            <button type="button" @click="add()" class="btn btn-default">Add category</button>
        </form>
    </div>

</template>

<script>
    export default {
        name: "CategoryComponent",
        data() {
            return {
                key: '',
                input: {
                    category_description: '',
                    category: '',
                },
            }
        },
        methods: {
            add() {
                let url = '/sports/';
                axios.post(url, {
                    category: this.input.category,
                    category_description: this.input.category_description,
                }).then(
                    (response) => {
                        console.log(response);
                            this.input={}
                        // web.location='/sports/'
                    }
                )
            }
        },
        /*computed: {
            axios.get(url)
        }*/
    }
</script>

<style scoped>
</style>
