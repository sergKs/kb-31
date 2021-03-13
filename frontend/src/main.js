import Vue from 'vue'
import App from './App.vue'
import router from './router'
import store from './store'

import DefaultLayout from '@/layouts/default-layout'
import LoginLayout from '@/layouts/login-layout'

Vue.config.productionTip = false

Vue.component('default-layout', DefaultLayout);
Vue.component('loginLayout', LoginLayout);

new Vue({
  router,
  store,
  render: h => h(App)
}).$mount('#app')
