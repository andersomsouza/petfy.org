<template>
    <header>
        <nav>
            <div class="nav-wrapper">
                <a class="brand-logo left " href="/"><img  class="logo" src="/img/logo-08.png" alt="Petfy"/></a>
                <ul class="right ">
                    <li><a href="">Login/Cadastre-se</a></li>
                </ul>
            </div>

        </nav>
    </header>
</template>

<script>
    export default {
        name: "navbar"
    }
</script>

<style scoped>
    .nav-wrapper {
        background-color: #FF6F00;
    }

    .logo {
        height: 42px;
        margin-top: 5px;
    }

</style>