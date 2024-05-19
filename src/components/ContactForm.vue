<template>
  <main class="container">
    <h2 class="text-center mb-5">İletişim Formu</h2>
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <form @submit.prevent="validateForm('submit')" @reset.prevent="resetForm">
          <div class="mb-3">
            <label for="name" class="form-label">İsim:</label>
            <input type="text" id="name" class="form-control" v-model="form.name">
          </div>
          <div class="mb-3">
            <label for="surname" class="form-label">Soyisim:</label>
            <input type="text" id="surname" class="form-control" v-model="form.surname">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Mail:</label>
            <input type="email" id="email" class="form-control" v-model="form.email">
          </div>
          <div class="mb-3">
            <label for="city" class="form-label">Şehir:</label>
            <select id="city" class="form-select" v-model="form.city">
              <option value="" disabled>Şehir seçiniz</option>
              <option value="Adana">Adana</option>
              <option value="Ankara">Ankara</option>
              <option value="İstanbul">İstanbul</option>
              
            </select>
          </div>
          <div class="mb-3">
            <label for="gender" class="form-label">Cinsiyet:</label>
            <div>
              <input type="radio" id="male" value="male" v-model="form.gender">
              <label for="male">Erkek</label>
              <input type="radio" id="female" value="female" v-model="form.gender">
              <label for="female">Kadın</label>
              <input type="radio" id="other" value="other" v-model="form.gender">
              <label for="other">Diğer</label>
            </div>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Mesajınız:</label>
            <textarea id="message" class="form-control" v-model="form.message" rows="4"></textarea>
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary">Gönder</button>
            <button type="reset" class="btn btn-secondary">Temizle</button>
          </div>
        </form>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  data() {
    return {
      form: {
        name: '',
        surname: '',
        email: '',
        city: '',
        gender: '',
        message: ''
      }
    }
  },
  methods: {
    validateForm(action) {
      let valid = true;
      if (this.form.name === '') {
        alert('İsim boş olamaz.');
        valid = false;
      }
      if (this.form.surname === '') {
        alert('Soyisim boş olamaz.');
        valid = false;
      }
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailPattern.test(this.form.email)) {
        alert('Geçersiz email adresi.');
        valid = false;
      }
      if (this.form.city === '') {
        alert('Şehir seçiniz.');
        valid = false;
      }
      if (this.form.gender === '') {
        alert('Cinsiyet seçiniz.');
        valid = false;
      }
      if (this.form.message === '') {
        alert('Mesaj boş olamaz.');
        valid = false;
      }

      if (valid) {
        if (action === 'submit') {
          alert('Form başarıyla gönderildi.');
          this.resetForm();
        }
      }
    },
    resetForm() {
      this.form = {
        name: '',
        surname: '',
        email: '',
        city: '',
        gender: '',
        message: ''
      };
    }
  }
}
</script>

<style scoped>
body {
  background-image: url('/images/pexels-jplenio-1103970.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  margin-top: 20px;
}
@media (max-width: 768px) {
  main.container {
    padding: 15px;
  }
}
@media (max-width: 576px) {
  main.container {
    padding: 10px;
  }
}
</style>
