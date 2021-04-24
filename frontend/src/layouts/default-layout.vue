<template>
  <section>
    <header>
      <nav class="navbar">
        <ul class="d-flex list-unstyled align-items-center">
          <li>
            <router-link class="logo" :to="{name: 'Home'}">
              <img src="/img/logo.svg" alt="iphone 11">
            </router-link>
          </li>
          <li>
            <router-link :to="{name: 'Home'}">Главная</router-link>
          </li>
          <li>
            <router-link :to="{name: 'Catalog'}">Каталог</router-link>
          </li>
          <li>
            <router-link :to="{name: 'About'}">О компании</router-link>
          </li>
          <li>
            <router-link :to="{name: 'Contact'}">Контакты</router-link>
          </li>
          <li>
            <router-link :to="{name: 'Login'}">Войти</router-link>
          </li>
        </ul>
        <Cart></Cart>
      </nav>
    </header>
    <main>
      <div class="mb-2">
        <slot />
      </div>
    </main>
    <footer>
      <div class="row">
        <div class="col-3">
          <p class="footer-header">Покупателям</p>
        </div>
        <div class="col-3">
          <p class="footer-header">Бизнесу</p>
        </div>
        <div class="col-3">
          <p class="footer-header">О компании</p>
        </div>
        <div class="col-3">
          <p class="footer-header">Контакты</p>
        </div>
      </div>
      <hr>
      <div class="row form-group">
        <div class="col-6">
          &copy; КБ-31, 2021 год.
        </div>
        <div class="col-6 text-right">

        </div>
      </div>
    </footer>
  </section>
</template>

<script>
import Cart from "@/components/Cart";
export default {
  name: "login-layout",
    components: {Cart}
}
</script>
