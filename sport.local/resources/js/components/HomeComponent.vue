<template>
    <div class="product">
        <div class="cart">
            <p>Cart({{cart}})</p>
        </div>
        <div class="product-image">
            <img v-bind:src="image" alt="">
        </div>
        <div class="product-info" style="alignment: right">
            <h2>{{ title }}</h2>
            <p v-if="inStock">In Stock</p>
            <p v-else>Out Of Stock</p>
            <p>shipping:{{ shipping }}</p>
            <ul>
                <li v-for="detail in details">{{ detail }}</li>
            </ul>
            <div v-for="(variant, index) in variants"
                 :key="variant.variantId"
                 class="color-box"
                 :style="{backgroundColor: variant.variantColor}"
                 @mouseover="updateProduct(index)">
                <p>{{variant.variantKit}}</p>

            </div>
            <button @click="addToCart"
                    :disabled="!inStock"
                    :class="{ disabledButton: !inStock}">Add to Cart
            </button>
        </div>
        <div>
            <h1>Reviews</h1>
            <p v-if="!reviews.length">There is no reviews yet.</p>
            <ul>
                <li v-for="review in reviews">
                    <p>{{review.name}}</p>
                    <p>{{review.review}}</p>
                    <p>{{review.rating}}</p>
                </li>
            </ul>
        </div>

        <review @review-submitted="addReview"></review>
    </div>

</template>

<script>
    import Review from './ReviewComponent.vue';

    export default {
        /*  props:{
              premium:{
                  type:Boolen,
                  required: true
              }
          },*/
        name: "HomeComponent",
        components: {review: Review},
        data: function () {
            return {
                brand: 'Barcelona',
                product: `Kits`,
                selectedVariant: 0,
                premium: true,
                // inStock:true,
                cart: 0,
                details: ["65% polyester", "35% cotton", "Gender-neutral"],
                variants: [{
                    variantId: 10,
                    variantKit: 'home',
                    variantColor: 'blue',
                    variantImage: '/home.jpg',
                    variantQuantity: 10
                },
                    {
                        variantId: 19,
                        variantKit: 'away',
                        variantColor: 'yellow',
                        variantImage: '/away.jpg',
                        variantQuantity: 0
                    }
                ],
                reviews: []
            }
        },
        methods: {
            addToCart() {
                this.cart += 1
                /* let url = '/cart/count';
                 axios.post(url,{
                     cart= this.cart
                 }).then(
                     (reponse) => {
                       this.cart = reponse.cart+=1
                 })*/
            },
            addReview(productReview) {
                this.reviews.push(productReview)
            },
            updateProduct(index) {
                this.selectedVariant = index;
                console.log(index)
            }
            /* upadateCart(){
                 this.$emit('add-to-cart')
             }*/
        },
        computed: {
            title() {
                return this.title = this.brand + ' ' + this.product
            },
            image() {
                return this.variants[this.selectedVariant].variantImage
            },
            inStock() {
                return this.variants[this.selectedVariant].variantQuantity
            },
            shipping() {
                if (this.premium) {
                    return "free"
                }
                return 2.99
            }
        }
    }
</script>

<style scoped>
    /*.disabledButton {
         background-color: #d8d8d8;
     }*/
    /*.review-form{*/
    /*width: 30%;*/
    /*padding: 25px;*/
    /*margin-bottom: 20px;*/
    /*}*/
    input {
        width: 100%;
        height: 25px;
        margin-bottom: 20px;
    }

    .color-box {
        position: relative;
        left: 500px;
        width: 40px;
        height: 40px;
        margin-top: 5px;
    }

    .cart {
        margin-right: 25px;
        float: right;
        border: 1px solid #d8d8d8;
        padding: 5px 20px;
    }

    .product-info {
        text-align: center;
    }

    .product-image {
        left: 0;
        height: 200px;
        width: 300px;
    }

    /*  .button {
          margin-top: 30px;
          border: none;
          background-color: #1E95EA;
          color: white;
          height: 40px;
          width: 100px;
      }*/

</style>
