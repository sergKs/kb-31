<template>
  <div class="home">
    <Carousel></Carousel>
    <div class="products-list row">
      <div class="col-3" v-for="item in items">
        <Product :item="item"></Product>
      </div>
    </div>
  </div>
</template>

<script>

import Product from "@/components/product/Product";
import Carousel from "@/components/Carousel";
export default {
  name: 'Home',
  components: {Carousel, Product},
    data() {
      return {
          items: []
      }
    },
    created() {
      this.$http.get('/api/products/list')
        .then((response) => this.items = response.data)
    }
}
</script>
