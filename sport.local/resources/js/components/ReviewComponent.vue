<template xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
    <div class="box">
        <form class="review-form" @submit.prevent="onSubmit">
            <div v-if="errors.length">
                <b>Please correct the following error(s):</b>
                <ul>
                    <li v-for="error in errors">{{ error }}</li>
                </ul>
            </div>
            <p>
                <label for="name" class="label">Name:</label>
                <input id="name" v-model="name">
            </p>
            <p>
                <label for="review" class="label">Review:</label>
                <textarea id="review" v-model="review"></textarea>
            </p>
            <p>
               <label for="rating" class="label">Rating:</label>
                <select id="rating" v-model.number="rating">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </p>
            <p>
                <input type="submit" value="Submit" class="label">
            </p>
        </form>
    </div>
</template>

<script>
    export default {
        name: "ReviewComponent",
        data: function () {
            return {
                name: null,
                review: null,
                rating: null,
                errors: []
            }
        },
        methods: {
            onSubmit() {
                if (this.name && this.review && this.rating) {
                    let productReview = {
                        name: this.name,
                        review: this.review,
                        rating: this.rating
                    };
                    this.$emit('review-submitted', productReview);
                    this.name = null;
                    this.review = null;
                    this.rating = null
                } else {
                    if (!this.name) this.errors.push(" Name Required.");
                    if (!this.review) this.errors.push("Review Required.");
                    if (!this.rating) this.errors.push("Rating Required.")
                }
            }
        }
    }
</script>

<style scoped>
    .box {
        align-self: flex-end;
        border: #0a0a0a 5px;
        margin-top: 5px;
    }

</style>
