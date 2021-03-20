<template>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-4">
        <img :src="item.image" class="img-fluid" />
      </div>
      <div class="col-md-8">
        <h1>{{item.name}}</h1>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <td>Размер экрана</td>
              <td>6.5</td>
            </tr>
            <tr>
              <td>RAM</td>
              <td>4Гб</td>
            </tr>
            <tr>
              <td>Втроенная память</td>
              <td>256Гб</td>
            </tr>
          </tbody>
        </table>
        <p>
          <span class="price">{{item.price}}</span>
        </p>
        <div>
          <button class="btn btn-danger btn-cart" @click="addToCart">
            Добавить в корзину
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProductInfo",
  data() {
    return {
      item: {
        id: 1,
        name: 'Huawei P Smart 2021',
        price: '13 990 ₽',
        image: 'https://img.mvideo.ru/Pdb/30053814b.jpg'
      }
    }
  },
  created() {
    const id = this.$route.params.id
    // get запрос
  },

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
