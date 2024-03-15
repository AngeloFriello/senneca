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
    <div>
        <div>
            <div v-if="this.user">

                <h3>{{ this.user.name }}</h3>
                <h3>{{ this.user.surname }}</h3>
                <h3>{{ this.user.email }}</h3>
                <h3>{{ this.user.birthday }}</h3>
                <router-link :to="{ name: 'users.edit', params: { id: user.id } }">
                    Edit
                </router-link>
                <button @click="deleteUser(this.user.id)" class="btn btn-danger">
                    Delete
                </button>

            </div>
        </div>
    </div>
</template>

<style></style>