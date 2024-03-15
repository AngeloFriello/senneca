<script>
import axios from 'axios';

export default {
  data() {
    return {
        BASE_URL: 'http://127.0.0.1:8000/api',
      userData: {
        name: '',
        surname: '',
        email: '',
        birthday: '',
      }
    };
  },
  methods: {
    createUser() {
      axios.post(`${this.BASE_URL}/users/create`, this.userData)
        .then(response => {
          console.log('User updated successfully:', response.data);
          this.$router.go(-1);
        })
        .catch(error => {
          console.error('Error updating user:', error);
        });
    },
    prova() {
        console.log(this.userData)
    }
  }
}
</script>

<template>

    <form @submit.prevent="createUser" class="container">

        <div>
            <label for="name" class="col-md-4 col-form-label text-md-right fw-bold" >NAME</label>
            <input type="text" id="name" value="" name="name" class="form-control" v-model="userData.name">
        </div>

        <div>
            <label for="surname" class="col-md-4 col-form-label text-md-right fw-bold">SURNAME</label>
            <input type="text" id="surname" value="" name="surname" class="form-control" v-model="userData.surname">
        </div>

        <div>
            <label for="email" class="col-md-4 col-form-label text-md-right fw-bold">EMAIL</label>
            <input type="text" id="email" value="" name="email" class="form-control" v-model="userData.email">
        </div>

        <div>
            <label for="birthday" class="col-md-4 col-form-label text-md-right fw-bold">BIRTHDAY</label>
            <input type="date" id="birthday" name="birthday" value="" class="form-control" v-model="userData.birthday">
        </div>

        <div class="my-3">
            <button type="submit" class="btn btn-primary" @click="prova()">
                Save
            </button>
        </div>
        <div>

        </div>

    </form>

</template>

<style></style>