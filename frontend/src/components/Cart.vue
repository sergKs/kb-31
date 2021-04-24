<template>
    <section class="cart">
        <div>Количество товаров: {{count}}</div>
        <div>Сумма: {{total}}</div>
    </section>
</template>

<script>
export default {
  name: "Cart",
  data() {
      return {
          count: 0,
          total: 0
      }
  },
    created() {
      this.$http.get('/api/cart')
        .then((response) => {
            this.count = response.data.count
            this.total = response.data.total
        })
    }
}
</script>
