<script>
import { RouterLink, RouterView } from 'vue-router';
import axios from 'axios';
export default {
    data() {
        return {
            users: [],
            BASE_URL: 'http://127.0.0.1:8000/api',
        }
    },
    methods: {
        fetchIndex() {
            axios.get(`${this.BASE_URL}/users`)
                .then(res => {
                    console.log(res.data.results);
                    this.users = res.data.results.user;

                })
        }
    },
    created(){
        this.fetchIndex()

    }
}

</script>

<template>
    lista utenti

    <ul v-for="user in users">
        <li>{{ user.name }}</li>
        <li>{{ user.surname }}</li>
        <li>{{ user.email }}</li>
        <li>{{ user.birthday }}</li>
    </ul>
</template>

<style></style>