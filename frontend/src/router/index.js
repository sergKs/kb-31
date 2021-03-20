import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import About from '../views/About'
import Contact from "@/views/Contact";
import Catalog from "@/views/Catalog";
import Login from "@/views/Login";
import ProductInfo from "@/views/ProductInfo";

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/about',
    name: 'About',
    component: About
  },
  {
    path: '/contact',
    name: 'Contact',
    component: Contact
  },
  {
    path: '/catalog',
    name: 'Catalog',
    component: Catalog
  },
  {
    path: '/catalog/:id',
    name: 'ProductInfo',
    component: ProductInfo
  },
  {
    path: '/login',
    name: 'Login',
    component: Login,
    meta: {
      layout: 'login-layout'
    }
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
