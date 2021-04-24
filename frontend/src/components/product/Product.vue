<template>
  <div class="product-item">
    <router-link :to="{name: 'ProductInfo', params: {id: item.id}}">
      <div class="mb-4">
        <img :src="item.image" class="w-100" />
      </div>
      <h3>{{item.name}}</h3>
      <div>
        <span class="price">{{item.price}}</span>
      </div>
    </router-link>
    <div class="mt-2">
      <button class="btn btn-danger w-100 btn-cart" @click="addToCart">
        Добавить в корзину
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: "Product",
  props: ['item'],
  methods: {
    addToCart(event) {
      event.target.classList.remove('btn-danger')
      event.target.classList.add('btn-warning')

      setTimeout(() => {
        event.target.classList.remove('btn-warning')
        event.target.classList.add('btn-danger')
      }, 2000)
    }
  }
}
</script>
