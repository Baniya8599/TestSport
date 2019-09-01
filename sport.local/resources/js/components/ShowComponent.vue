<template>
   <div>
       <div>
           <li>
               <h1>{{sport.category}}</h1>
               {{sports.category_description}}
           </li>
       </div>
       <div>
           <form>
               <button type="button" @click="url" class="btn btn-default">Edit category</button>
           </form>
       </div>
   </div>
</template>

<script>
    export default {
        name: "ShowComponent",
        data() {
            return {
                key: '',
                sports: {
                    category_description:'',
                    category:'',
                },
            }
        },
        methods : {
            show() {
                let url = '/sports/{{$sport->id}}/show';
                axios.get(url, {
                    category: this.sports.category,
                    category_description: this.sports.category_description,
                })
            }
        }
    }
</script>

<style scoped>

</style>
