<script>
import { RouterLink, RouterView } from 'vue-router';
</script>

<template>
    <nav>
        <router-link :to="{ name: 'users.index' }"> 
            lista degli utenti
        </router-link>
    </nav>
</template>

<style>
</style>