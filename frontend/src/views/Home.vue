<template>
  <div class="home">
    <Carousel></Carousel>
    <div class="products-list row">
      <div class="col-3">
        <Product></Product>
      </div>
      <div class="col-3">
        <Product></Product>
      </div>
      <div class="col-3">
        <Product></Product>
      </div>
      <div class="col-3">
        <Product></Product>
      </div>
    </div>
  </div>
</template>

<script>

import Product from "@/components/product/Product";
import Carousel from "@/components/Carousel";
export default {
  name: 'Home',
  components: {Carousel, Product}
}
</script>
