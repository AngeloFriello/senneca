<script>
import HomeViews from './views/HomeViews.vue';
import Users from './components/Users.vue';

export default {
    components: {
        HomeViews,
        Users,
    },
};
</script>

<template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <meta name="csrf-token" content="">

        <title>s</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    </head>

    <header>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12">
                    <router-link :to="{ name: 'users.index' }" class="btn btn-dark">
                        All Users
                    </router-link>
                </div>
            </div>
        </div>

    </header>
    <router-view>

    </router-view>

    </html>

</template>

<style></style>
