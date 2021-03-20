<template>
  <div class="container mt-4 login-form">
    <h1>Авторизиация</h1>
    <form class="mt-4" @submit="login">
      <div class="form-group">
        <label class="font-weight-bold">Email</label>
        <input type="email" name="email" class="form-control" placeholder="Введите Email" v-model="email">
        <div class="error">{{errorsEmail}}</div>
      </div>
      <div class="form-group">
        <label class="font-weight-bold">Пароль</label>
        <input type="password" name="password" class="form-control" placeholder="Введите пароль" v-model="password">
        <div class="error">{{errorsPassword}}</div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Войти</button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "Login",
  data() {
    return {
      email: '',
      password: '',
      errorsEmail: '',
      errorsPassword: ''
    }
  },
  methods: {
    login(event) {
      this.errorsEmail = ''
      this.errorsPassword = ''

      if (this.email.trim().length === 0) {
        this.errorsEmail = 'Пожалуйста заполниет Email.'
      }
      if (this.password.trim().length === 0) {
        this.errorsPassword = 'Пожалуйста заполниет Пароль.'
      }

      if (this.errorsEmail.length === 0 && this.errorsPassword.length === 0) {
        alert('Отправили запрос.')
      }

      event.preventDefault()
    }
  }
}
</script>
