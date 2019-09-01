<template>
    <div>

        <div class="panel is-primary box" v-if="data.length > 0">
            <div class="panel-heading">
                <h1>LIST</h1>
               <!-- <div v-if="d.sport_id === sport.id">
                    <h1>{{sport.category}}</h1>
                </div>
                <div v-else>Input correct sport_id</div>-->
            </div>
            <ul v-for="(d ,i) in data">
                <a href="#" class="{active:isActive}" @click.prevent="toggle(i)">{{d.title}}</a>
                <!--<h1><a class="{active:isActive}" @:click.prevent="toggle()">{{d.title}}</a></h1>-->
                <p v-if="isActive === i">{{d.description}}</p>
            </ul>
        </div>
        <div v-else>No News</div>

        <div>
            <!--<div>{{news.sport_id}}</div>-->
            <h1 class="title">{{news.title}}</h1>
            <div>{{news.description}}</div>
        </div>
        <form>
            <div class="box">
               <!-- <label for="" class="label">Sport Id</label>
                <div class="control">
                    <input type="integer" v-model="news.sport_id" name="sport_id" placeholder="Sport Id">
                </div>-->
                <label class="label">Title</label>
                <div class="control">
                    <input type="text" v-model="news.title" name="title" placeholder="News title">
                </div>
                <label class="label">Description</label>
                <div class="control">
                    <textarea v-model="news.description" name="description" placeholder="about News"></textarea>
                </div>
                <div class="field" style="padding-top: 5px">
                    <div class="control">
                        <button type="submit" @click.prevent="add">Add</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</template>

<script>
    export default {
        name: "NewsComponent",
        data() {
            return {
                data: [],
                key: '',
                isActive: null,
                news: {
                    title: '',
                    description: '',
                    sport_id:1,
                }
            }
        },
        created() {
            this.show()
        },

        methods: {
            show() {
                let url = '/news_all/';
                axios.get(url).then(
                    (response) => {
                        this.data = response.data
                    }
                )
            },
            add() {
                let url = '/news/add';
                axios.post(url, {
                    title: this.news.title,
                    description: this.news.description,
                    sport_id: '1'
                }).then(
                    (response) => {
                        if (response.data.success === 'ss') {
                            this.news = {}
                        }
                    }
                )
            },
            toggle: function (id) {
                if (this.isActive !== id) {
                    this.isActive = id;
                } else {
                    this.isActive = null
                }
            }

        }
    }
</script>

<style scoped>

</style>
