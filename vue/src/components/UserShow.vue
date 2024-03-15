<script>
import { RouterLink, RouterView } from 'vue-router';
import axios from 'axios';
export default {
    props: {
        id: String,
    },
    data() {
        return {

            user: null,
            BASE_URL: 'http://127.0.0.1:8000/api',
        }
    },
    methods: {
        fetchShow() {
            axios.get(`${this.BASE_URL}/users/${this.id}`)
                .then(res => {
                    console.log(res.data);
                    this.user = res.data.user;
                })
        },
        deleteUser(id) {
            axios.delete(`${this.BASE_URL}/users/${id}`)
                .then(response => {
                    this.$router.go(-1);
                    console.log('Utente eliminato:', response.data);
                })
                .catch(error => {

                    console.error('Errore durante la richiesta DELETE:', error);
                });
        }
    },
    created() {
        this.fetchShow()
    },
}
</script>

<template>
    <div class="container">
        <div class="row">
            <div v-if="this.user" class="col-4 m-5">
                <div class="card p-4">
                    <ul>
                        <li><strong>Name: </strong> {{ this.user.name }}</li>
                        <li><strong>Surname: </strong> {{ this.user.surname }}</li>
                        <li><strong>Email: </strong> {{ this.user.email }}</li>
                        <li><strong>Birthday: </strong> {{ this.user.birthday }}</li>
                    </ul>

                    <div class="my-3">
                        <router-link :to="{ name: 'users.edit', params: { id: user.id } }" class="btn btn-secondary ">
                            Edit
                        </router-link>
                    </div>
                    <div>
                        <button @click="deleteUser(this.user.id)" class="btn btn-danger">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style></style>