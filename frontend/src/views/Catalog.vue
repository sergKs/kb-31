<template>
  <div>
    <h1 class="mb-4">Каталог товаров</h1>
    <div class="row">
      <section class="col-md-3">
        <div class="mb-4">
          <h5>Производитель</h5>
          <select class="form-control">
            <option>Huawei</option>
            <option>Apple</option>
          </select>
        </div>
        <div class="mb-4">
          <h5>Размер экрана</h5>
          <select class="form-control">
            <option>4.5</option>
            <option>4.6</option>
            <option>5</option>
          </select>
        </div>
      </section>
      <section class="col-md-9">
        <div class="row">
          <div class="col-md-4">
            <Product></Product>
          </div>
          <div class="col-md-4">
            <Product></Product>
          </div>
          <div class="col-md-4">
            <Product></Product>
          </div>
          <div class="col-md-4">
            <Product></Product>
          </div>
          <div class="col-md-4">
            <Product></Product>
          </div>
          <div class="col-md-4">
            <Product></Product>
          </div>
        </div>
      </section>
    </div>
  </div>
</template>

<script>
import Product from "@/components/product/Product";
export default {
  name: "Catalog",
  components: {Product}
}
</script>
