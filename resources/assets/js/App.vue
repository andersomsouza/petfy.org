<template>
    <div>
        <petfy-navbar></petfy-navbar>
        <router-view></router-view>
    </div>
</template>

<script>
    import Navbar from './components/shared/navbar/Navbar.vue';

    export default {
        name: "app",
        components: {
            'petfy-navbar':Navbar
        }
    }
</script>

<style scoped>

</style>