<script>
import { RouterLink, RouterView } from 'vue-router';
import axios from 'axios';
export default {
    props: {

    },
    data() {
        return {
            users: [],
            BASE_URL: 'http://127.0.0.1:8000/api',
            pagination: null,
        }
    },
    methods: {
        fetchUsers(page = 1) {
            axios.get(`${this.BASE_URL}/users?page=${page}`)
                .then(response => {
                    console.log(response.data)
                   
                    this.users = response.data.results.user;
                    this.pagination = response.data.results.pagination;
                    console.log(this.pagination)
                })
                .catch(error => {
                    console.error('Error fetching users:', error);
                });
        },
        fetchNextPage() {
            this.fetchUsers(this.pagination.current_page + 1);
        },
        fetchPreviousPage() {
            this.fetchUsers(this.pagination.current_page - 1);
        },

    },
    mounted() {
        this.fetchUsers();

    },
    created() {
        this.fetchUsers

    },

}

</script>

<template>
    <div class="container">
        <div class="row mt-5">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Surname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Birthday</th>
                    </tr>
                </thead>
                <tbody>

                    <tr v-for="user in users">
                        <th scope="row">{{ user.id }}</th>
                        <td>{{ user.name }}</td>
                        <td>{{ user.surname }}</td>
                        <td>{{ user.email }}</td>
                        <td>{{ user.birthday }}</td>
                        <td class="btn btn-primary m-1">
                            <router-link :to="{ name: 'users.show', params: { id: user.id } }">
                                Go more Details
                            </router-link>
                        </td>
                    </tr>
                </tbody>
            </table>

            <nav class="d-flex justify-content-between">
                <button @click="fetchPreviousPage()" class="btn btn-primary">
                    <
                </button>
                <button @click="fetchNextPage()" class="btn btn-primary">
                    >
                </button>
                
            </nav>

            <div>
                <router-link :to="{ name: 'users.create' }" class="btn btn-secondary">
                    Add New User
                </router-link>
            </div>


        </div>
    </div>


</template>

<style></style>